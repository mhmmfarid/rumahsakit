<?php

namespace App\Filament\Widgets;

use App\Models\Dokter;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DokterStatsWidget extends BaseWidget
{
    protected array|string|int $columnSpan = 1;
    protected function getStats(): array
    {
        return [
            Stat::make('Total Dokter', Dokter::count())
                ->description('Jumlah dokter terdaftar')
                ->descriptionIcon('heroicon-m-user')
                ->icon('heroicon-o-user-plus')
                ->color('success'),
        ];
    }
}
