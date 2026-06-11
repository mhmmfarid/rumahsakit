<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('pasiens')) {
            DB::unprepared('DROP TRIGGER IF EXISTS pasien_before_insert');
            DB::unprepared(<<<'SQL'
CREATE TRIGGER pasien_before_insert
BEFORE INSERT ON pasiens
FOR EACH ROW
BEGIN
    IF NEW.no_rm IS NULL OR NEW.no_rm = '' THEN
        SET @next_rm = COALESCE((SELECT MAX(CAST(SUBSTRING(no_rm, 3) AS UNSIGNED)) FROM pasiens), 0) + 1;
        SET NEW.no_rm = CONCAT('RM', LPAD(@next_rm, 4, '0'));
    END IF;
END
SQL
            );
        }

        if (Schema::hasTable('pemeriksaans')) {
            DB::unprepared('DROP TRIGGER IF EXISTS pemeriksaan_before_insert');
            DB::unprepared('DROP TRIGGER IF EXISTS pemeriksaan_before_update');

            DB::unprepared(<<<'SQL'
CREATE TRIGGER pemeriksaan_before_insert
BEFORE INSERT ON pemeriksaans
FOR EACH ROW
BEGIN
    IF NEW.biaya < 0 THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Biaya pemeriksaan tidak boleh negatif.';
    END IF;
END
SQL
            );

            DB::unprepared(<<<'SQL'
CREATE TRIGGER pemeriksaan_before_update
BEFORE UPDATE ON pemeriksaans
FOR EACH ROW
BEGIN
    IF NEW.biaya < 0 THEN
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'Biaya pemeriksaan tidak boleh negatif.';
    END IF;
END
SQL
            );
        }
    }

    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS pasien_before_insert');
        DB::unprepared('DROP TRIGGER IF EXISTS pemeriksaan_before_insert');
        DB::unprepared('DROP TRIGGER IF EXISTS pemeriksaan_before_update');
    }
};
