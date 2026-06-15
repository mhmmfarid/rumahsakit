<?php

namespace App\Filament\Widgets;

use App\Models\Poli;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PoliStatsWidget extends BaseWidget
{
    protected array|string|int $columnSpan = 1;
    protected function getStats(): array
    {
        return [
            Stat::make('Total Poli', Poli::count())
                ->description('Jumlah poli tersedia')
                ->descriptionIcon('heroicon-m-building-office-2')
                ->icon('heroicon-o-building-office-2')
                ->color('info'),
        ];
    }
}
