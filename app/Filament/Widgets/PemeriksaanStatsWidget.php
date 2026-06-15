<?php

namespace App\Filament\Widgets;

use App\Models\Pemeriksaan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PemeriksaanStatsWidget extends BaseWidget
{
    protected array|string|int $columnSpan = 1;
    protected function getStats(): array
    {
        return [
            Stat::make('Total Pemeriksaan', Pemeriksaan::count())
                ->description('Jumlah pemeriksaan dilakukan')
                ->descriptionIcon('heroicon-m-clipboard-document-check')
                ->icon('heroicon-o-clipboard-document-check')
                ->color('primary'),
        ];
    }
}
