<?php

namespace App\Filament\Widgets;

use App\Models\Obat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ObatStatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Obat', Obat::count())
                ->description('Jumlah obat tersedia')
                ->descriptionIcon('heroicon-m-beaker')
                ->icon('heroicon-o-beaker')
                ->color('warning'),
        ];
    }
}
