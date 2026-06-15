<?php

namespace App\Filament\Widgets;

use App\Models\ResepObat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ResepObatStatsWidget extends BaseWidget
{
    protected array|string|int $columnSpan = 1;
    protected function getStats(): array
    {
        return [
            Stat::make('Total Resep Obat', ResepObat::count())
                ->description('Jumlah resep obat dibuat')
                ->descriptionIcon('heroicon-m-document-text')
                ->icon('heroicon-o-document-text')
                ->color('danger'),
        ];
    }
}
