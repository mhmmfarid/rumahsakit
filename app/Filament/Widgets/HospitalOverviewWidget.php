<?php

namespace App\Filament\Widgets;

use App\Models\Dokter;
use App\Models\Obat;
use App\Models\Pasien;
use App\Models\Pemeriksaan;
use App\Models\Poli;
use App\Models\ResepObat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class HospitalOverviewWidget extends BaseWidget
{
    protected static ?int $sort = 1;
    
    protected int | string | array $columnSpan = 'full';

    protected function getStats(): array
    {
        $dokterCount = Dokter::count();
        $pasienCount = Pasien::count();
        $poliCount = Poli::count();
        $pemeriksaanCount = Pemeriksaan::count();
        $obatCount = Obat::count();
        $resepCount = ResepObat::count();

        return [
            Stat::make('Total Pasien', $pasienCount)
                ->description('Jumlah pasien terdaftar')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->icon('heroicon-o-users')
                ->chart([30, 45, 60, 85, 110, 140, $pasienCount])
                ->color('info'),

            Stat::make('Total Dokter', $dokterCount)
                ->description('Dokter aktif melayani')
                ->descriptionIcon('heroicon-m-user')
                ->icon('heroicon-o-user-plus')
                ->chart([5, 8, 12, 14, 18, 20, $dokterCount])
                ->color('success'),

            Stat::make('Total Poli', $poliCount)
                ->description('Layanan poliklinik aktif')
                ->descriptionIcon('heroicon-m-building-office-2')
                ->icon('heroicon-o-building-office-2')
                ->chart([2, 3, 4, 4, 5, 6, $poliCount])
                ->color('warning'),

            Stat::make('Total Pemeriksaan', $pemeriksaanCount)
                ->description('Selesai dilakukan pemeriksaan')
                ->descriptionIcon('heroicon-m-clipboard-document-check')
                ->icon('heroicon-o-clipboard-document-check')
                ->chart([50, 75, 100, 140, 180, 220, $pemeriksaanCount])
                ->color('primary'),

            Stat::make('Total Obat', $obatCount)
                ->description('Jenis obat dalam inventaris')
                ->descriptionIcon('heroicon-m-check-circle')
                ->icon('heroicon-o-beaker')
                ->chart([15, 20, 25, 35, 40, 45, $obatCount])
                ->color('success'),

            Stat::make('Total Resep Obat', $resepCount)
                ->description('Resep dirilis oleh dokter')
                ->descriptionIcon('heroicon-m-document-text')
                ->icon('heroicon-o-document-text')
                ->chart([20, 35, 45, 60, 80, 100, $resepCount])
                ->color('danger'),
        ];
    }
}
