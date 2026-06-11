<?php

namespace App\Filament\Widgets;

use App\Models\Pasien;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PasienStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Pasien', Pasien::count())
                ->description('Jumlah pasien terdaftar')
                ->descriptionIcon('heroicon-m-rectangle-stack')
                ->icon('heroicon-o-users')
                ->color('slate'),
        ];
    }
}
