-- Stored Procedures
DELIMITER $$

CREATE PROCEDURE add_pasien(
    IN p_nama VARCHAR(255),
    IN p_jenis_kelamin CHAR(1),
    IN p_tanggal_lahir DATE,
    IN p_alamat TEXT,
    IN p_no_hp VARCHAR(20)
)
BEGIN
    INSERT INTO pasiens (nama, jenis_kelamin, tanggal_lahir, alamat, no_hp, created_at, updated_at)
    VALUES (p_nama, p_jenis_kelamin, p_tanggal_lahir, p_alamat, p_no_hp, NOW(), NOW());

    SET @last_id = LAST_INSERT_ID();

    INSERT INTO kartu_pasiens (pasien_id, nomor_kartu, tanggal_terbit, created_at, updated_at)
    VALUES (@last_id, CONCAT('KP-', LPAD(@last_id,8,'0')), CURDATE(), NOW(), NOW());

    SELECT @last_id AS pasien_id;
END$$

CREATE PROCEDURE add_pemeriksaan(
    IN p_pasien_id BIGINT,
    IN p_dokter_id BIGINT,
    IN p_poli_id BIGINT,
    IN p_tanggal_periksa DATE,
    IN p_keluhan TEXT,
    IN p_diagnosa TEXT
)
BEGIN
    INSERT INTO pemeriksaans (pasien_id, dokter_id, poli_id, tanggal_periksa, keluhan, diagnosa, biaya, created_at, updated_at)
    VALUES (p_pasien_id, p_dokter_id, p_poli_id, p_tanggal_periksa, p_keluhan, p_diagnosa, 0, NOW(), NOW());

    SELECT LAST_INSERT_ID() AS pemeriksaan_id;
END$$

CREATE PROCEDURE report_patients_by_period(
    IN p_start DATE,
    IN p_end DATE
)
BEGIN
    SELECT DATE(p.tanggal_periksa) AS tanggal, COUNT(DISTINCT p.pasien_id) AS jumlah_pasien
    FROM pemeriksaans p
    WHERE p.tanggal_periksa BETWEEN p_start AND p_end
    GROUP BY DATE(p.tanggal_periksa)
    ORDER BY DATE(p.tanggal_periksa);
END$$

DELIMITER ;

-- Triggers
DELIMITER $$

-- Trigger 1: reduce obat stok ketika resep_obats dibuat
CREATE TRIGGER tr_resep_obats_after_insert
AFTER INSERT ON resep_obats
FOR EACH ROW
BEGIN
    UPDATE obats
    SET stok = GREATEST(0, stok - NEW.jumlah)
    WHERE nama_obat = NEW.nama_obat;
END$$

-- Trigger 2: update pemeriksaans.biaya ketika pemeriksaan_obat di-insert
CREATE TRIGGER tr_pemeriksaan_obat_after_insert
AFTER INSERT ON pemeriksaan_obat
FOR EACH ROW
BEGIN
    DECLARE total DECIMAL(12,2) DEFAULT 0;

    SELECT COALESCE(SUM(po.jumlah * o.harga),0)
    INTO total
    FROM pemeriksaan_obat po
    JOIN obats o ON o.id = po.obat_id
    WHERE po.pemeriksaan_id = NEW.pemeriksaan_id;

    UPDATE pemeriksaans
    SET biaya = total
    WHERE id = NEW.pemeriksaan_id;
END$$

-- Trigger 3: log pasien deletions
CREATE TRIGGER tr_pasiens_after_delete
AFTER DELETE ON pasiens
FOR EACH ROW
BEGIN
    INSERT INTO audit_pasiens (pasien_id, nama, payload, deleted_by, alasan, created_at, updated_at)
    VALUES (OLD.id, OLD.nama, JSON_OBJECT('no_rm', OLD.no_rm, 'alamat', OLD.alamat, 'no_hp', OLD.no_hp), NULL, 'hapus pasien', NOW(), NOW());
END$$

DELIMITER ;

-- Views
CREATE OR REPLACE VIEW view_pasien_pemeriksaan AS
SELECT pa.id AS pasien_id, pa.no_rm, pa.nama AS pasien_nama, pe.id AS pemeriksaan_id, pe.tanggal_periksa, pe.diagnosa, pe.keluhan, pe.biaya
FROM pasiens pa
LEFT JOIN pemeriksaans pe ON pe.pasien_id = pa.id;

CREATE OR REPLACE VIEW view_dokter_poli AS
SELECT d.id AS dokter_id, d.nama AS dokter_nama, d.spesialis, p.id AS poli_id, p.nama_poli
FROM dokters d
LEFT JOIN polis p ON d.poli_id = p.id;

CREATE OR REPLACE VIEW view_resep_detail AS
SELECT r.id AS resep_id, r.pemeriksaan_id, r.nama_obat, r.dosis, r.jumlah, o.id AS obat_id, o.nama_obat AS obat_nama, o.harga
FROM resep_obats r
LEFT JOIN obats o ON o.nama_obat = r.nama_obat;

-- Database users (MySQL)
-- Run these as a privileged user (root)
-- Replace 'your_database_name' with your DB name

-- Administrator DB user
CREATE USER IF NOT EXISTS 'app_admin'@'localhost' IDENTIFIED BY 'StrongAdminPass!';
GRANT ALL PRIVILEGES ON `your_database_name`.* TO 'app_admin'@'localhost';
FLUSH PRIVILEGES;

-- Limited application user
CREATE USER IF NOT EXISTS 'app_user'@'localhost' IDENTIFIED BY 'AppUserPass!';
GRANT SELECT, INSERT, UPDATE ON `your_database_name`.* TO 'app_user'@'localhost';
FLUSH PRIVILEGES;
