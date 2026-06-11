<?php

require __DIR__ . '/vendor/autoload.php';

$app = require __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(\Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo "=== Database Counts ===\n";
echo "Dokter: " . \App\Models\Dokter::count() . "\n";
echo "Poli: " . \App\Models\Poli::count() . "\n";
echo "Obat: " . \App\Models\Obat::count() . "\n";
echo "Pemeriksaan: " . \App\Models\Pemeriksaan::count() . "\n";
echo "ResepObat: " . \App\Models\ResepObat::count() . "\n";
echo "Pasien: " . \App\Models\Pasien::count() . "\n";
echo "User: " . \App\Models\User::count() . "\n";

echo "\n=== Testing Relations ===\n";
$dokter = \App\Models\Dokter::first();
if ($dokter) {
    echo "Dokter 1 - Pemeriksaan count: " . $dokter->pemeriksaans()->count() . "\n";
}

$poli = \App\Models\Poli::first();
if ($poli) {
    echo "Poli 1 - Pemeriksaan count: " . $poli->pemeriksaans()->count() . "\n";
}

echo "\n✓ All models loaded successfully\n";
