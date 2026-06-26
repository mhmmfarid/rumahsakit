<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public static function services(): array
    {
        return [
            'rawat-jalan' => [
                'name' => 'Rawat Jalan',
                'icon' => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                'iconBg' => 'bg-blue-50 text-blue-600',
                'description' => 'Layanan konsultasi dan pemeriksaan medis tanpa harus menginap di rumah sakit. Pasien dapat berkonsultasi dengan dokter umum maupun spesialis sesuai dengan kebutuhan.',
                'benefits' => ['Konsultasi langsung dengan dokter spesialis', 'Waktu tunggu yang singkat', 'Pendaftaran online dan offline', 'Rekam medis terintegrasi', 'Rujukan ke layanan diagnostik yang cepat'],
                'facilities' => ['Ruang konsultasi nyaman', 'Peralatan diagnostik dasar', 'Sistem antrian digital', 'Apotek terintegrasi', 'Area tunggu ber-AC'],
                'procedures' => ['Pendaftaran di loket atau via website', 'Mengisi data pasien (jika baru)', 'Mengantri sesuai nomor urut', 'Konsultasi dengan dokter', 'Pengambilan resep/tindakan lanjutan'],
                'hours' => 'Senin - Sabtu: 08:00 - 20:00, Minggu: 09:00 - 16:00',
                'requirements' => ['Kartu identitas (KTP/SIM/Paspor)', 'Kartu BPJS (jika menggunakan)', 'Rujukan dari faskes tingkat pertama (jika ada)', 'Hasil pemeriksaan sebelumnya (jika ada)'],
                'doctors' => [
                    ['name' => 'dr. Andi Pratama, Sp.PD', 'specialty' => 'Penyakit Dalam', 'photo' => null],
                    ['name' => 'dr. Siti Rahma, Sp.A', 'specialty' => 'Anak', 'photo' => null],
                ],
                'faq' => [
                    ['q' => 'Apakah rawat jalan memerlukan rujukan?', 'a' => 'Tidak selalu. Anda dapat datang langsung tanpa rujukan, kecuali untuk layanan BPJS yang memerlukan rujukan berjenjang.'],
                    ['q' => 'Berapa lama waktu tunggu rata-rata?', 'a' => 'Rata-rata waktu tunggu adalah 15-30 menit untuk pasien yang sudah mendaftar online.'],
                ],
            ],
            'rawat-inap' => [
                'name' => 'Rawat Inap',
                'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4',
                'iconBg' => 'bg-indigo-50 text-indigo-600',
                'description' => 'Perawatan intensif dengan fasilitas kamar yang nyaman dan tenaga medis yang siaga 24 jam. Kami menyediakan berbagai kelas perawatan sesuai kebutuhan dan kemampuan pasien.',
                'benefits' => ['Perawatan 24 jam oleh perawat profesional', 'Dokter jaga siaga penuh', 'Kamar dengan berbagai kelas', 'Gizi dan makanan terjamin', 'Fasilitas penunjang lengkap'],
                'facilities' => ['Kamar VIP, Kelas 1, 2, dan 3', 'TV dan Wi-Fi di setiap kamar', 'Kamar mandi dalam', 'Nurse call system', 'Ruang rawat intensif (ICU/NICU)'],
                'procedures' => ['Pasien datang dengan surat rawat inap dari dokter', 'Registrasi di loket rawat inap', 'Penentuan kelas kamar', 'Penyerahan pasien ke perawat jaga', 'Monitoring oleh dokter dan perawat secara berkala'],
                'hours' => '24 Jam (Pelayanan rawat inap)',
                'requirements' => ['Surat rawat inap dari dokter', 'Identitas diri (KTP)', 'Kartu BPJS/Asuransi (jika ada)', 'Deposit biaya perawatan', 'Pendamping pasien (maksimal 1 orang)'],
                'doctors' => [
                    ['name' => 'dr. Budi Santoso, Sp.PD', 'specialty' => 'Internis', 'photo' => null],
                    ['name' => 'dr. Dewi Lestari, Sp.A', 'specialty' => 'Anak', 'photo' => null],
                ],
                'faq' => [
                    ['q' => 'Apa saja yang perlu dibawa saat rawat inap?', 'a' => 'Bawalah pakaian ganti, perlengkapan mandi, obat-obatan pribadi, dan dokumen penting seperti KTP dan kartu BPJS.'],
                    ['q' => 'Bolehkah keluarga menjenguk?', 'a' => 'Ya, jam besuk adalah pukul 11:00-13:00 dan 16:00-19:00. Setiap pasien maksimal 2 orang penjenguk.'],
                ],
            ],
            'igd' => [
                'name' => 'Instalasi Gawat Darurat (IGD)',
                'icon' => 'M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                'iconBg' => 'bg-red-50 text-red-600',
                'description' => 'Pelayanan medis cepat dan tanggap untuk kondisi darurat yang mengancam jiwa. IGD kami beroperasi 24 jam sehari, 7 hari seminggu dengan tim dokter dan perawat yang berpengalaman.',
                'benefits' => ['Penanganan cepat (response time < 5 menit)', 'Tim dokter jaga 24 jam', 'Peralatan resusitasi lengkap', 'Ambulans siap siaga', 'Ruang tindakan darurat'],
                'facilities' => ['Ruang triase', 'Ruang resusitasi', 'Ruang tindakan darurat', 'Ruang observasi', 'Ambulans dengan perlengkapan ACLS'],
                'procedures' => ['Pasien datang langsung atau via ambulans', 'Penilaian triase oleh perawat', 'Penanganan berdasarkan tingkat kegawatan', 'Tindakan medis darurat', 'Observasi atau rujukan ke rawat inap'],
                'hours' => '24 Jam Non-stop',
                'requirements' => ['Identitas diri (KTP/SIM)', 'Kartu BPJS/Asuransi (jika ada)', 'Tidak memerlukan rujukan untuk kasus darurat'],
                'doctors' => [
                    ['name' => 'dr. Ahmad Fauzi, Sp.EM', 'specialty' => 'Emergency Medicine', 'photo' => null],
                    ['name' => 'dr. Rina Wijaya, Sp.EM', 'specialty' => 'Emergency Medicine', 'photo' => null],
                ],
                'faq' => [
                    ['q' => 'Kapan harus ke IGD?', 'a' => 'Segera ke IGD jika mengalami kondisi seperti nyeri dada, sesak napas berat, perdarahan hebat, pingsan, kecelakaan, atau kondisi darurat lainnya.'],
                    ['q' => 'Apakah IGD menerima pasien BPJS?', 'a' => 'Ya, IGD kami menerima pasien BPJS untuk kasus kegawatdaruratan tanpa perlu rujukan.'],
                ],
            ],
            'medical-check-up' => [
                'name' => 'Medical Check Up',
                'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                'iconBg' => 'bg-green-50 text-green-600',
                'description' => 'Pemeriksaan kesehatan menyeluruh untuk deteksi dini berbagai penyakit. Tersedia paket MCU dasar, eksekutif, dan khusus perusahaan dengan hasil cepat dan akurat.',
                'benefits' => ['Deteksi dini penyakit berbahaya', 'Paket MCU yang dapat disesuaikan', 'Hasil pemeriksaan cepat', 'Konsultasi hasil dengan dokter', 'Rekam medis digital'],
                'facilities' => ['Ruang pemeriksaan khusus MCU', 'Alat EKG, USG, dan treadmill', 'Laboratorium terpadu', 'Ruang radiologi', 'Ruang konsultasi'],
                'procedures' => ['Registrasi dan konfirmasi paket', 'Pengambilan sampel darah dan urine', 'Pemeriksaan fisik oleh dokter', 'Pemeriksaan penunjang (EKG, Rontgen, USG)', 'Konsultasi hasil dan rekomendasi'],
                'hours' => 'Senin - Sabtu: 07:00 - 14:00',
                'requirements' => ['Puasa 8-10 jam sebelum pemeriksaan', 'Membawa identitas diri', 'Membawa hasil MCU sebelumnya (jika ada)', 'Mengisi kuesioner kesehatan'],
                'doctors' => [
                    ['name' => 'dr. Maya Anggraini, Sp.PD', 'specialty' => 'Penyakit Dalam', 'photo' => null],
                    ['name' => 'dr. Fitri Handayani, Sp.PK', 'specialty' => 'Patologi Klinik', 'photo' => null],
                ],
                'faq' => [
                    ['q' => 'Berapa lama hasil MCU keluar?', 'a' => 'Hasil MCU umumnya keluar dalam 1-3 hari kerja tergantung jenis pemeriksaan yang dilakukan.'],
                    ['q' => 'Apakah bisa membuat paket MCU khusus?', 'a' => 'Ya, kami menyediakan paket MCU kustom untuk kebutuhan individu maupun perusahaan. Silakan hubungi tim kami.'],
                ],
            ],
            'laboratorium' => [
                'name' => 'Laboratorium',
                'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z',
                'iconBg' => 'bg-purple-50 text-purple-600',
                'description' => 'Fasilitas laboratorium modern untuk pemeriksaan sampel darah, urine, dan jaringan tubuh. Didukung oleh tenaga analis kesehatan profesional dan alat diagnostik terkini.',
                'benefits' => ['Hasil pemeriksaan akurat dan terpercaya', 'Beragam jenis pemeriksaan laboratorium', 'Sistem manajemen sampel terintegrasi', 'Hasil dapat diakses secara digital', 'Kerjasama dengan laboratorium rujukan nasional'],
                'facilities' => ['Ruang pengambilan sampel', 'Laboratorium hematologi', 'Laboratorium kimia klinik', 'Laboratorium mikrobiologi', 'Laboratorium imunologi'],
                'procedures' => ['Pendaftaran dan pengisian formulir', 'Pengambilan sampel oleh petugas', 'Proses pemeriksaan sampel', 'Verifikasi hasil oleh dokter', 'Pengambilan hasil di loket atau via sistem'],
                'hours' => 'Senin - Sabtu: 07:00 - 18:00, Minggu: 08:00 - 14:00',
                'requirements' => ['Surat permintaan pemeriksaan dari dokter', 'Identitas diri', 'Puasa (untuk pemeriksaan tertentu)'],
                'doctors' => [
                    ['name' => 'dr. Heryanto, Sp.PK', 'specialty' => 'Patologi Klinik', 'photo' => null],
                ],
                'faq' => [
                    ['q' => 'Apakah perlu puasa untuk tes laboratorium?', 'a' => 'Untuk pemeriksaan gula darah puasa, profil lipid, dan beberapa tes lainnya diperlukan puasa 8-10 jam.'],
                    ['q' => 'Berapa lama hasil laboratorium keluar?', 'a' => 'Hasil laboratorium rutin keluar dalam 2-4 jam. Pemeriksaan khusus memerlukan waktu 1-3 hari.'],
                ],
            ],
            'radiologi' => [
                'name' => 'Radiologi',
                'icon' => 'M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4',
                'iconBg' => 'bg-cyan-50 text-cyan-600',
                'description' => 'Pelayanan pencitraan medis dengan teknologi radiologi modern untuk menunjang diagnosis penyakit secara akurat.',
                'benefits' => ['Peralatan pencitraan terkini', 'Hasil citra berkualitas tinggi', 'Dibaca oleh radiolog berpengalaman', 'Prosedur aman dan nyaman', 'Hasil digital dapat diakses cepat'],
                'facilities' => ['Ruang Rontgen digital', 'USG 4D', 'CT Scan 128 slice', 'MRI 1.5 Tesla', 'Mammografi'],
                'procedures' => ['Pendaftaran dan verifikasi', 'Persiapan pasien sesuai jenis pemeriksaan', 'Pelaksanaan pemeriksaan', 'Pembacaan hasil oleh radiolog', 'Pengambilan hasil dan konsultasi'],
                'hours' => 'Senin - Sabtu: 07:00 - 20:00',
                'requirements' => ['Surat permintaan radiologi dari dokter', 'Identitas diri', 'Persiapan khusus (puasa/berpakaian) sesuai jenis pemeriksaan'],
                'doctors' => [
                    ['name' => 'dr. Raditya, Sp.Rad', 'specialty' => 'Radiologi', 'photo' => null],
                ],
                'faq' => [
                    ['q' => 'Apakah radiologi aman?', 'a' => 'Ya, prosedur radiologi menggunakan dosis radiasi yang terkontrol dan aman sesuai standar keselamatan pasien.'],
                ],
            ],
            'farmasi' => [
                'name' => 'Farmasi & Apotek',
                'icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                'iconBg' => 'bg-amber-50 text-amber-600',
                'description' => 'Pelayanan farmasi dengan apoteker profesional yang siap memberikan informasi lengkap mengenai penggunaan obat yang aman dan tepat.',
                'benefits' => ['Obat asli dan terjamin kualitasnya', 'Konsultasi dengan apoteker', 'Informasi efek samping dan interaksi obat', 'Layanan racikan obat', 'Stok obat lengkap'],
                'facilities' => ['Apotek rawat jalan', 'Depo farmasi rawat inap', 'Ruang konsultasi apoteker', 'Sistem informasi obat digital'],
                'procedures' => ['Dokter menulis resep', 'Pasien menebus resep di apotek', 'Apoteker memverifikasi resep', 'Penyerahan obat disertai informasi', 'Edukasi cara penggunaan obat'],
                'hours' => '24 Jam',
                'requirements' => ['Resep asli dari dokter', 'Identitas pasien'],
                'doctors' => [],
                'faq' => [
                    ['q' => 'Apakah obat di apotek rumah sakit lebih mahal?', 'a' => 'Harga obat sesuai dengan ketentuan yang berlaku dan bersaing. Kami menjamin keaslian dan kualitas obat.'],
                ],
            ],
            'rehabilitasi-medik' => [
                'name' => 'Rehabilitasi Medik',
                'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
                'iconBg' => 'bg-teal-50 text-teal-600',
                'description' => 'Terapi pemulihan fungsi fisik pasca operasi, cedera, atau penyakit kronis. Program rehabilitasi dirancang khusus sesuai kondisi pasien.',
                'benefits' => ['Program rehabilitasi personal', 'Fisioterapis profesional', 'Peralatan rehabilitasi modern', 'Pemulihan fungsi motorik', 'Terapi okupasi dan wicara'],
                'facilities' => ['Ruang fisioterapi', 'Alat terapi elektrik', 'Alat terapi latihan', 'Ruang terapi okupasi', 'Kolam terapi'],
                'procedures' => ['Konsultasi awal dengan dokter rehab', 'Asesmen kondisi pasien', 'Penyusunan program terapi', 'Pelaksanaan terapi rutin', 'Evaluasi berkala perkembangan'],
                'hours' => 'Senin - Sabtu: 08:00 - 17:00',
                'requirements' => ['Rujukan dari dokter', 'Hasil pemeriksaan penunjang', 'Pakaian yang nyaman untuk terapi'],
                'doctors' => [
                    ['name' => 'dr. Putra Wardhana, Sp.KFR', 'specialty' => 'Kedokteran Fisik & Rehabilitasi', 'photo' => null],
                ],
                'faq' => [
                    ['q' => 'Berapa lama program rehabilitasi?', 'a' => 'Durasi program bervariasi tergantung kondisi, umumnya 6-12 sesi untuk hasil yang optimal.'],
                ],
            ],
            'poli-anak' => [
                'name' => 'Poli Anak',
                'icon' => 'M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                'iconBg' => 'bg-pink-50 text-pink-600',
                'description' => 'Pelayanan kesehatan khusus untuk bayi, anak, dan remaja hingga usia 18 tahun. Tersedia vaksinasi, tumbuh kembang, dan konsultasi penyakit anak.',
                'benefits' => ['Dokter spesialis anak berpengalaman', 'Vaksinasi lengkap', 'Pemantauan tumbuh kembang', 'Suasana ramah anak', 'Konsultasi gizi dan ASI'],
                'facilities' => ['Ruang bermain anak', 'Ruang vaksinasi', 'Ruang konsultasi', 'Ruang tumbuh kembang', 'Area menyusui'],
                'procedures' => ['Pendaftaran poli anak', 'Pengukuran antropometri', 'Pemeriksaan oleh dokter anak', 'Konsultasi dan edukasi', 'Resep obat atau jadwal kontrol'],
                'hours' => 'Senin - Sabtu: 08:00 - 18:00',
                'requirements' => ['Buku KIA/KMS', 'Kartu identitas orang tua', 'Kartu vaksinasi', 'BPJS/Asuransi (jika ada)'],
                'doctors' => [
                    ['name' => 'dr. Siti Rahma, Sp.A', 'specialty' => 'Spesialis Anak', 'photo' => null],
                    ['name' => 'dr. Dewi Lestari, Sp.A', 'specialty' => 'Spesialis Anak', 'photo' => null],
                ],
                'faq' => [
                    ['q' => 'Apakah ada layanan vaksinasi?', 'a' => 'Ya, kami menyediakan vaksinasi lengkap untuk anak sesuai jadwal imunisasi nasional.'],
                ],
            ],
            'poli-penyakit-dalam' => [
                'name' => 'Poli Penyakit Dalam',
                'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
                'iconBg' => 'bg-orange-50 text-orange-600',
                'description' => 'Penanganan penyakit internal dewasa meliputi diabetes, hipertensi, infeksi, gangguan ginjal, dan berbagai penyakit dalam lainnya.',
                'benefits' => ['Diagnosis komprehensif', 'Penanganan penyakit kronis', 'Konsultasi gaya hidup sehat', 'Rujukan ke subspesialis', 'Pemantauan jangka panjang'],
                'facilities' => ['Ruang konsultasi', 'Ruang tindakan', 'Alat EKG', 'Spirometri', 'Alat ukur tekanan darah digital'],
                'procedures' => ['Pendaftaran dan anamnesis', 'Pemeriksaan fisik', 'Pemeriksaan penunjang', 'Penegakan diagnosis', 'Terapi dan edukasi pasien'],
                'hours' => 'Senin - Sabtu: 08:00 - 19:00',
                'requirements' => ['Identitas diri', 'Hasil laboratorium (jika ada)', 'Riwayat pengobatan sebelumnya'],
                'doctors' => [
                    ['name' => 'dr. Andi Pratama, Sp.PD', 'specialty' => 'Penyakit Dalam', 'photo' => null],
                    ['name' => 'dr. Budi Santoso, Sp.PD', 'specialty' => 'Penyakit Dalam', 'photo' => null],
                ],
                'faq' => [
                    ['q' => 'Apakah harus kontrol rutin untuk penyakit kronis?', 'a' => 'Ya, pasien dengan penyakit kronis seperti diabetes dan hipertensi disarankan kontrol rutin setiap 1-3 bulan.'],
                ],
            ],
            'poli-bedah' => [
                'name' => 'Poli Bedah',
                'icon' => 'M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 5.758a3 3 0 10-4.243 4.243 3 3 0 004.243-4.243zm0-5.758a3 3 0 10-4.243-4.243 3 3 0 004.243 4.243z',
                'iconBg' => 'bg-slate-100 text-slate-700',
                'description' => 'Layanan konsultasi dan tindakan bedah untuk berbagai kondisi medis yang memerlukan intervensi operatif. Didukung oleh dokter bedah berpengalaman dan ruang operasi modern.',
                'benefits' => ['Dokter bedah subspesialis', 'Ruang operasi steril dan modern', 'Teknik bedah minimal invasif', 'Perawatan pasca bedah', 'Manajemen nyeri terpadu'],
                'facilities' => ['Ruang operasi standar', 'Ruang operasi minor', 'Ruang pemulihan', 'Ruang konsultasi', 'Alat bedah modern'],
                'procedures' => ['Konsultasi dan asesmen pra-bedah', 'Pemeriksaan penunjang', 'Penjadwalan operasi', 'Pelaksanaan tindakan bedah', 'Perawatan pasca operasi dan kontrol'],
                'hours' => 'Senin - Sabtu: 08:00 - 17:00',
                'requirements' => ['Rujukan dari dokter', 'Hasil pemeriksaan pra-bedah', 'Surat persetujuan tindakan medis', 'Identitas diri dan asuransi'],
                'doctors' => [
                    ['name' => 'dr. Hendra Gunawan, Sp.B', 'specialty' => 'Bedah Umum', 'photo' => null],
                ],
                'faq' => [
                    ['q' => 'Apa saja persiapan sebelum operasi?', 'a' => 'Pasien akan menjalani pemeriksaan pra-operasi, puasa sesuai instruksi, dan konsultasi dengan dokter anestesi.'],
                ],
            ],
            'poli-jantung' => [
                'name' => 'Poli Jantung',
                'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
                'iconBg' => 'bg-rose-50 text-rose-600',
                'description' => 'Diagnosis dan perawatan penyakit kardiovaskular oleh spesialis jantung berpengalaman. Dilengkapi dengan peralatan diagnostik dan terapi terkini.',
                'benefits' => ['Konsultasi kardiologi komprehensif', 'Pemeriksaan non-invasif', 'Ekokardiografi', 'Uji latih jantung', 'Manajemen gagal jantung'],
                'facilities' => ['Ruang EKG', 'Ruang ekokardiografi', 'Treadmill test', 'Holter monitoring', 'Ruang konsultasi'],
                'procedures' => ['Pendaftaran dan anamnesis', 'Pemeriksaan fisik kardiologi', 'Pemeriksaan penunjang jantung', 'Penegakan diagnosis', 'Terapi dan rencana tindak lanjut'],
                'hours' => 'Senin - Sabtu: 08:00 - 17:00',
                'requirements' => ['Rujukan dari dokter umum', 'Hasil EKG sebelumnya (jika ada)', 'Daftar obat yang dikonsumsi'],
                'doctors' => [
                    ['name' => 'dr. Fajar Nugroho, Sp.JP', 'specialty' => 'Jantung & Pembuluh Darah', 'photo' => null],
                ],
                'faq' => [
                    ['q' => 'Kapan perlu periksa ke dokter jantung?', 'a' => 'Jika Anda mengalami nyeri dada, sesak napas, jantung berdebar, atau memiliki faktor risiko seperti hipertensi dan diabetes.'],
                ],
            ],
            'poli-saraf' => [
                'name' => 'Poli Saraf',
                'icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                'iconBg' => 'bg-violet-50 text-violet-600',
                'description' => 'Penanganan gangguan sistem saraf pusat dan tepi termasuk stroke, epilepsi, nyeri kepala, gangguan tidur, dan penyakit neurologis lainnya.',
                'benefits' => ['Diagnosis neurologis akurat', 'Penanganan stroke akut', 'EEG dan EMG', 'Manajemen epilepsi', 'Terapi nyeri saraf'],
                'facilities' => ['Ruang konsultasi saraf', 'Alat EEG', 'Alat EMG', 'Ruang terapi', 'Neuro-navigation'],
                'procedures' => ['Anamnesis neurologis', 'Pemeriksaan fisik saraf', 'Pemeriksaan penunjang', 'Diagnosis dan terapi', 'Edukasi pasien dan keluarga'],
                'hours' => 'Senin - Sabtu: 08:00 - 17:00',
                'requirements' => ['Rujukan dari dokter', 'Hasil CT Scan/MRI (jika ada)', 'Riwayat penyakit'],
                'doctors' => [
                    ['name' => 'dr. Anita Permata, Sp.S', 'specialty' => 'Neurologi', 'photo' => null],
                ],
                'faq' => [
                    ['q' => 'Apa yang perlu dilakukan jika terkena stroke?', 'a' => 'Segera ke IGD dalam waktu emas (golden period) 4,5 jam untuk mendapatkan penanganan optimal.'],
                ],
            ],
            'poli-kandungan' => [
                'name' => 'Poli Kandungan (Obgyn)',
                'icon' => 'M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6',
                'iconBg' => 'bg-fuchsia-50 text-fuchsia-600',
                'description' => 'Pelayanan kesehatan reproduksi wanita, kehamilan, persalinan, dan pasca melahirkan. Dilengkapi dengan fasilitas USG 4D dan NST.',
                'benefits' => ['Pemeriksaan kehamilan komprehensif', 'USG 4D dan NST', 'Persiapan persalinan', 'Konsultasi KB', 'Deteksi dini kanker serviks'],
                'facilities' => ['Ruang periksa kandungan', 'USG 4D', 'NST (Non-Stress Test)', 'Ruang tindakan', 'Klinik menopause'],
                'procedures' => ['Pendaftaran dan anamnesis', 'Pemeriksaan kehamilan', 'USG kandungan', 'Konsultasi dan edukasi', 'Jadwal kontrol berikutnya'],
                'hours' => 'Senin - Sabtu: 08:00 - 19:00',
                'requirements' => ['Buku KIA (untuk ibu hamil)', 'Identitas diri', 'Hasil pemeriksaan sebelumnya'],
                'doctors' => [
                    ['name' => 'dr. Maya Anggraini, Sp.OG', 'specialty' => 'Obstetri & Ginekologi', 'photo' => null],
                ],
                'faq' => [
                    ['q' => 'Kapan harus periksa kehamilan pertama kali?', 'a' => 'Segera periksa setelah terlambat haid atau saat test kehamilan positif, idealnya sebelum usia kehamilan 12 minggu.'],
                ],
            ],
            'poli-gigi' => [
                'name' => 'Poli Gigi & Mulut',
                'icon' => 'M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4',
                'iconBg' => 'bg-yellow-50 text-yellow-600',
                'description' => 'Perawatan gigi dan mulut lengkap termasuk scaling, tambal, cabut gigi, perawatan saluran akar, dan prostodontik.',
                'benefits' => ['Perawatan gigi lengkap', 'Scaling dan pembersihan karang gigi', 'Restorasi dan tambal gigi', 'Cabut gigi steril', 'Konsultasi estetika gigi'],
                'facilities' => ['Unit dental chair modern', 'Rontgen gigi panoramik', 'Alat steril gigi', 'Ruang konsultasi', 'Laboratorium gigi'],
                'procedures' => ['Pendaftaran dan anamnesis', 'Pemeriksaan rongga mulut', 'Rontgen gigi (jika perlu)', 'Tindakan perawatan gigi', 'Edukasi kebersihan mulut'],
                'hours' => 'Senin - Sabtu: 08:00 - 18:00',
                'requirements' => ['Identitas diri', 'Rujukan (jika ada)', 'Riwayat alergi obat'],
                'doctors' => [
                    ['name' => 'drg. Sarah Widya, Sp.KG', 'specialty' => 'Kedokteran Gigi', 'photo' => null],
                ],
                'faq' => [
                    ['q' => 'Berapa sering harus scaling gigi?', 'a' => 'Scaling gigi disarankan setiap 6 bulan sekali untuk menjaga kebersihan dan kesehatan gigi.'],
                ],
            ],
            'poli-mata' => [
                'name' => 'Poli Mata',
                'icon' => 'M15 12a3 3 0 11-6 0 3 3 0 016 0zM2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z',
                'iconBg' => 'bg-sky-50 text-sky-600',
                'description' => 'Pemeriksaan dan perawatan kesehatan mata termasuk koreksi penglihatan, operasi katarak, glaukoma, dan gangguan retina.',
                'benefits' => ['Pemeriksaan mata komprehensif', 'Koreksi penglihatan dan resep kacamata', 'Operasi katarak modern', 'Manajemen glaukoma', 'Deteksi dini gangguan retina'],
                'facilities' => ['Ruang periksa mata', 'Slit lamp', 'Autorefractometer', 'Tonometer', 'Alat operasi katarak'],
                'procedures' => ['Pendaftaran dan anamnesis', 'Pemeriksaan visus dasar', 'Pemeriksaan dengan slit lamp', 'Pengukuran tekanan bola mata', 'Diagnosis dan resep pengobatan'],
                'hours' => 'Senin - Sabtu: 08:00 - 17:00',
                'requirements' => ['Identitas diri', 'Kacamata/lensa kontak yang digunakan saat ini', 'Riwayat penyakit mata'],
                'doctors' => [
                    ['name' => 'dr. Yudhistira, Sp.M', 'specialty' => 'Oftalmologi', 'photo' => null],
                ],
                'faq' => [
                    ['q' => 'Kapan perlu periksa mata?', 'a' => 'Periksakan mata setahun sekali jika memakai kacamata, atau segera jika ada keluhan penglihatan buram, sakit mata, atau floaters.'],
                ],
            ],
        ];
    }

    public static function centers(): array
    {
        return [
            'cardiac-center' => [
                'name' => 'Cardiac Center',
                'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z',
                'iconBg' => 'bg-rose-50 text-rose-600',
                'description' => 'Pusat layanan jantung terpadu dengan teknologi kateterisasi dan bedah kardiovaskular. Menangani berbagai penyakit jantung dari diagnosis hingga rehabilitasi.',
                'unggulan' => ['Kateterisasi jantung 24/7', 'Bedah bypass jantung', 'Pemasangan ring (stent)', 'Ekokardiografi transesofageal', 'Rehabilitasi jantung terpadu'],
                'teknologi' => ['Lab kateterisasi digital', 'Ekokardiografi 3D/4D', 'CT Cardiac Scan', 'MRI Jantung', 'Holter monitoring'],
                'penanganan' => ['Penyakit jantung koroner', 'Gagal jantung', 'Aritmia', 'Penyakit katup jantung', 'Hipertensi pulmonal'],
                'hours' => 'Klinik: Senin - Sabtu 08:00-17:00, Kateterisasi: 24 Jam',
                'doctors' => [
                    ['name' => 'dr. Fajar Nugroho, Sp.JP', 'specialty' => 'Jantung & Pembuluh Darah', 'photo' => null],
                ],
                'faq' => [
                    ['q' => 'Apakah semua tindakan jantung ditanggung BPJS?', 'a' => 'Ya, sebagian besar tindakan kardiologi termasuk kateterisasi dan operasi bypass ditanggung BPJS Kesehatan.'],
                ],
            ],
            'brain-stroke-center' => [
                'name' => 'Brain & Stroke Center',
                'icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                'iconBg' => 'bg-violet-50 text-violet-600',
                'description' => 'Penanganan komprehensif gangguan otak dan stroke dengan tim neurologis multidisiplin dan peralatan diagnostik mutakhir.',
                'unggulan' => ['Golden period stroke management', 'Trombolisis intravena', 'Neurointervensi', 'Rehabilitasi stroke', 'Program pencegahan stroke'],
                'teknologi' => ['CT Scan 128 slice', 'MRI 1.5 Tesla', 'Digital Subtraction Angiography', 'EEG digital', 'TCD (Transcranial Doppler)'],
                'penanganan' => ['Stroke iskemik dan hemoragik', 'Tumor otak', 'Epilepsi', 'Demensia', 'Gangguan gerak'],
                'hours' => 'Klinik: Senin - Sabtu 08:00-17:00, IGD Stroke: 24 Jam',
                'doctors' => [
                    ['name' => 'dr. Anita Permata, Sp.S', 'specialty' => 'Neurologi', 'photo' => null],
                ],
                'faq' => [
                    ['q' => 'Apa itu golden period stroke?', 'a' => 'Golden period adalah waktu 4,5 jam sejak onset stroke di mana penanganan memberikan hasil terbaik. Segera ke IGD jika mencurigai stroke!'],
                ],
            ],
            'orthopedic-center' => [
                'name' => 'Orthopedic Center',
                'icon' => 'M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 5.758a3 3 0 10-4.243 4.243 3 3 0 004.243-4.243zm0-5.758a3 3 0 10-4.243-4.243 3 3 0 004.243 4.243z',
                'iconBg' => 'bg-orange-50 text-orange-600',
                'description' => 'Layanan bedah ortopedi dan penanganan cedera tulang, sendi, serta cedera olahraga dengan teknologi operasi minimal invasif.',
                'unggulan' => ['Operasi tulang minimal invasif', 'Total joint replacement', 'Artroskopi', 'Penanganan fraktur kompleks', 'Kedokteran olahraga'],
                'teknologi' => ['C-Arm fluoroscopy', 'Artroskop', 'Operasi mikroskop', 'Bone densitometry', '3D printing implant'],
                'penanganan' => ['Fraktur/patah tulang', 'Osteoporosis', 'Artritis sendi', 'Cedera olahraga', 'Kelainan tulang belakang'],
                'hours' => 'Senin - Sabtu: 08:00 - 17:00',
                'doctors' => [
                    ['name' => 'dr. Hendra Gunawan, Sp.OT', 'specialty' => 'Ortopedi & Traumatologi', 'photo' => null],
                ],
                'faq' => [
                    ['q' => 'Berapa lama pemulihan setelah operasi tulang?', 'a' => 'Waktu pemulihan bervariasi, umumnya 4-12 minggu tergantung jenis operasi dan kondisi pasien.'],
                ],
            ],
            'mother-child-center' => [
                'name' => 'Mother & Child Center',
                'icon' => 'M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z',
                'iconBg' => 'bg-pink-50 text-pink-600',
                'description' => 'Pusat layanan ibu hamil, persalinan, dan perawatan neonatal dengan fasilitas NICU dan ruang bersalin nyaman.',
                'unggulan' => ['Persalinan normal dan caesar', 'NICU/PICU lengkap', 'Kelas ibu hamil', 'Konsultasi laktasi', 'Program KB pasca persalinan'],
                'teknologi' => ['USG 4D', 'NST fetal monitor', 'Inkubator NICU', 'Phototherapy', 'Ventilator neonatal'],
                'penanganan' => ['Kehamilan normal dan risiko tinggi', 'Persalinan', 'Perawatan bayi prematur', 'Konsultasi fertilitas', 'Kesehatan reproduksi'],
                'hours' => '24 Jam (Kamar Bersalin & NICU)',
                'doctors' => [
                    ['name' => 'dr. Maya Anggraini, Sp.OG', 'specialty' => 'Obstetri & Ginekologi', 'photo' => null],
                    ['name' => 'dr. Siti Rahma, Sp.A', 'specialty' => 'Spesialis Anak', 'photo' => null],
                ],
                'faq' => [
                    ['q' => 'Apakah suami bisa menemani saat persalinan?', 'a' => 'Ya, kami mengizinkan suami atau pendamping untuk menemani proses persalinan di ruang bersalin.'],
                ],
            ],
            'eye-center' => [
                'name' => 'Eye Center',
                'icon' => 'M15 12a3 3 0 11-6 0 3 3 0 016 0zM2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z',
                'iconBg' => 'bg-sky-50 text-sky-600',
                'description' => 'Klinik mata komprehensif dengan layanan LASIK, operasi katarak modern, dan pemeriksaan retina lengkap.',
                'unggulan' => ['Operasi katarak phacoemulsifikasi', 'LASIK dan koreksi penglihatan', 'Vitrektomi', 'Manajemen glaukoma', 'Konsultasi low vision'],
                'teknologi' => ['Slit lamp digital', 'OCT (Optical Coherence Tomography)', 'Laser Excimer', 'Phacoemulsifier', 'Fundus camera'],
                'penanganan' => ['Katarak', 'Glaukoma', 'Gangguan retina', 'Refraksi mata', 'Pterigium'],
                'hours' => 'Senin - Sabtu: 08:00 - 17:00',
                'doctors' => [
                    ['name' => 'dr. Yudhistira, Sp.M', 'specialty' => 'Oftalmologi', 'photo' => null],
                ],
                'faq' => [
                    ['q' => 'Apakah operasi katarak bisa untuk kedua mata sekaligus?', 'a' => 'Tidak, operasi katarak dilakukan satu per satu dengan jeda waktu untuk meminimalkan risiko komplikasi.'],
                ],
            ],
            'dental-center' => [
                'name' => 'Dental Center',
                'icon' => 'M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4',
                'iconBg' => 'bg-yellow-50 text-yellow-600',
                'description' => 'Perawatan gigi menyeluruh termasuk estetika gigi, ortodonti (behel), implan gigi, dan prostodontik dengan dokter gigi spesialis.',
                'unggulan' => ['Implan gigi', 'Ortodonti (behel)', 'Estetika gigi (veneer)', 'Perawatan saluran akar', 'Prostodontik (gigi palsu)'],
                'teknologi' => ['Rontgen panoramik', 'CBCT 3D', 'Laser gigi', 'Microscope endodontic', 'Digital impression'],
                'penanganan' => ['Karies gigi', 'Gigi berlubang', 'Gigi bungsu', 'Gigi sensitif', 'Masalah gusi'],
                'hours' => 'Senin - Sabtu: 08:00 - 20:00',
                'doctors' => [
                    ['name' => 'drg. Sarah Widya, Sp.KG', 'specialty' => 'Kedokteran Gigi', 'photo' => null],
                    ['name' => 'drg. Andika Putra, Sp.Orth', 'specialty' => 'Ortodonti', 'photo' => null],
                ],
                'faq' => [
                    ['q' => 'Berapa lama pemasangan behel?', 'a' => 'Perawatan ortodonti umumnya memakan waktu 1-3 tahun tergantung tingkat keparahan kasus.'],
                ],
            ],
            'cancer-center' => [
                'name' => 'Cancer Center',
                'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                'iconBg' => 'bg-purple-50 text-purple-600',
                'description' => 'Pusat onkologi terpadu dengan layanan kemoterapi, radioterapi, bedah tumor, dan perawatan paliatif dengan pendekatan multidisiplin.',
                'unggulan' => ['Kemoterapi', 'Radioterapi', 'Bedah onkologi', 'Terapi target', 'Perawatan paliatif'],
                'teknologi' => ['Linear accelerator', 'Kemoterapi infus pump', 'PET-CT Scan', 'Patologi anatomi digital', 'Stereotactic biopsy'],
                'penanganan' => ['Kanker payudara', 'Kanker paru', 'Kanker serviks', 'Kanker kolorektal', 'Kanker prostat'],
                'hours' => 'Senin - Sabtu: 08:00 - 17:00',
                'doctors' => [
                    ['name' => 'dr. Chandra Wirawan, Sp.Onk.Rad', 'specialty' => 'Onkologi Radiasi', 'photo' => null],
                ],
                'faq' => [
                    ['q' => 'Apakah kemoterapi selalu menimbulkan efek samping?', 'a' => 'Efek samping kemoterapi bervariasi tergantung jenis obat dan kondisi pasien, namun dapat dikelola dengan baik.'],
                ],
            ],
            'diabetes-center' => [
                'name' => 'Diabetes Center',
                'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
                'iconBg' => 'bg-teal-50 text-teal-600',
                'description' => 'Edukasi dan manajemen diabetes komprehensif dengan pendekatan multidisiplin untuk mengontrol gula darah dan mencegah komplikasi.',
                'unggulan' => ['Edukasi diabetes terstruktur', 'Konsultasi gizi', 'Pemantauan gula darah', 'Manajemen komplikasi diabetes', 'Program diet dan olahraga'],
                'teknologi' => ['CGM (Continuous Glucose Monitoring)', 'HbA1c analyzer', 'Foot screening devices', 'Insulin pump', 'Telemonitoring'],
                'penanganan' => ['Diabetes tipe 1 dan 2', 'Diabetes gestasional', 'Neuropati diabetik', 'Nefropati diabetik', 'Kaki diabetik'],
                'hours' => 'Senin - Sabtu: 08:00 - 17:00',
                'doctors' => [
                    ['name' => 'dr. Andi Pratama, Sp.PD', 'specialty' => 'Penyakit Dalam - Endokrin', 'photo' => null],
                ],
                'faq' => [
                    ['q' => 'Apakah diabetes bisa disembuhkan?', 'a' => 'Diabetes belum bisa disembuhkan, namun dapat dikontrol dengan baik sehingga pasien dapat hidup normal dan berkualitas.'],
                ],
            ],
            'trauma-center' => [
                'name' => 'Trauma Center',
                'icon' => 'M13 10V3L4 14h7v7l9-11h-7z',
                'iconBg' => 'bg-red-50 text-red-600',
                'description' => 'Penanganan darurat cedera berat dan kecelakaan dengan tim trauma response cepat dan peralatan life support lengkap.',
                'unggulan' => ['Tim trauma response 24/7', 'Damage control surgery', 'ICU trauma', 'Rehabilitasi pasca trauma', 'Penanganan polytrauma'],
                'teknologi' => ['Ventilator dan life support', 'FAST ultrasound', 'Portable X-ray', 'Pelindung tulang belakang', 'Alat fiksasi eksternal'],
                'penanganan' => ['Cedera kepala berat', 'Cedera tulang belakang', 'Trauma thorax', 'Trauma abdomen', 'Fraktur multiple'],
                'hours' => '24 Jam Non-stop',
                'doctors' => [
                    ['name' => 'dr. Ahmad Fauzi, Sp.EM', 'specialty' => 'Emergency Medicine', 'photo' => null],
                    ['name' => 'dr. Hendra Gunawan, Sp.OT', 'specialty' => 'Ortopedi & Traumatologi', 'photo' => null],
                ],
                'faq' => [
                    ['q' => 'Apa yang harus dilakukan saat melihat kecelakaan?', 'a' => 'Hubungi ambulans segera, jangan memindahkan korban jika tidak perlu, dan hentikan perdarahan dengan tekanan langsung.'],
                ],
            ],
            'geriatric-center' => [
                'name' => 'Geriatric Center',
                'icon' => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                'iconBg' => 'bg-blue-50 text-blue-600',
                'description' => 'Pelayanan kesehatan khusus lansia dengan pendekatan holistik yang mencakup aspek fisik, mental, dan sosial untuk kualitas hidup optimal.',
                'unggulan' => ['Asesmen geriatri komprehensif', 'Manajemen multi-penyakit', 'Konsultasi gizi lansia', 'Fisioterapi lansia', 'Dukungan psikososial'],
                'teknologi' => ['Alat ukur kepadatan tulang', 'Alat bantu dengar digital', 'Alat bantu jalan', 'Monitor tekanan darah', 'Alat fitness lansia'],
                'penanganan' => ['Demensia dan Alzheimer', 'Osteoporosis', 'Sarkopenia', 'Inkontinensia', 'Gangguan keseimbangan'],
                'hours' => 'Senin - Sabtu: 08:00 - 16:00',
                'doctors' => [
                    ['name' => 'dr. Budi Santoso, Sp.PD', 'specialty' => 'Penyakit Dalam - Geriatri', 'photo' => null],
                ],
                'faq' => [
                    ['q' => 'Kapan lansia perlu periksa ke geriatri?', 'a' => 'Lansia usia 60+ dengan multiple penyakit atau penurunan fungsi tubuh disarankan konsultasi rutin setiap 3-6 bulan.'],
                ],
            ],
            'digestive-center' => [
                'name' => 'Digestive Center',
                'icon' => 'M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z',
                'iconBg' => 'bg-amber-50 text-amber-600',
                'description' => 'Pusat penanganan gangguan pencernaan dengan fasilitas endoskopi, kolonoskopi, dan manajemen penyakit hati yang komprehensif.',
                'unggulan' => ['Endoskopi diagnostik dan terapi', 'Kolonoskopi', 'ERCP', 'Manajemen hepatitis', 'Konsultasi gizi dan diet'],
                'teknologi' => ['Endoskopi高清', 'Kolonoskopi', 'ERCP', 'FibroScan', 'Capsule endoscopy'],
                'penanganan' => ['Maag dan GERD', 'Hepatitis', 'Pankreatitis', 'Penyakit radang usus', 'Gangguan hati dan empedu'],
                'hours' => 'Senin - Sabtu: 08:00 - 17:00',
                'doctors' => [
                    ['name' => 'dr. Andi Pratama, Sp.PD', 'specialty' => 'Penyakit Dalam - Gastroenterologi', 'photo' => null],
                ],
                'faq' => [
                    ['q' => 'Apakah endoskopi menyakitkan?', 'a' => 'Endoskopi dilakukan dengan sedasi sehingga pasien tidak merasakan nyeri selama prosedur berlangsung.'],
                ],
            ],
        ];
    }

    public function serviceIndex()
    {
        $services = collect($this->services());
        $categories = ['Poliklinik', 'Diagnostik', 'Penunjang', 'Gawat Darurat', 'Lainnya'];
        return view('pages.layanan.index', compact('services', 'categories'));
    }

    public function serviceShow($slug)
    {
        $services = $this->services();
        if (!isset($services[$slug])) {
            abort(404);
        }
        $service = $services[$slug];
        $allServices = $services;
        return view('pages.layanan.show', compact('service', 'slug', 'allServices'));
    }

    public function centerIndex()
    {
        $centers = collect($this->centers());
        return view('pages.unggulan.index', compact('centers'));
    }

    public function centerShow($slug)
    {
        $centers = $this->centers();
        if (!isset($centers[$slug])) {
            abort(404);
        }
        $center = $centers[$slug];
        return view('pages.unggulan.show', compact('center', 'slug', 'centers'));
    }

    public function tentang()
    {
        return view('pages.tentang');
    }

    public function kontak()
    {
        return view('pages.kontak');
    }
}
