<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected static ?string $title = 'Dashboard Klinik Koehried';
    protected static ?string $navigationLabel = 'Dashboard';
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected ?string $heading = 'Selamat Datang di Klinik Koehried';
    protected ?string $subheading = 'Pantau status layanan, pasien, dan edukasi kesehatan dari satu tampilan terintegrasi.';
}
