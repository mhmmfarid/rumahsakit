<?php

namespace App\Providers;

use App\Models\Dokter;
use App\Models\Obat;
use App\Models\Pasien;
use App\Models\Pemeriksaan;
use App\Models\Poli;
use App\Models\ResepObat;
use App\Policies\DokterPolicy;
use App\Policies\ObatPolicy;
use App\Policies\PasienPolicy;
use App\Policies\PemeriksaanPolicy;
use App\Policies\PoliPolicy;
use App\Policies\ResepObatPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::policy(Dokter::class, DokterPolicy::class);
        Gate::policy(Pasien::class, PasienPolicy::class);
        Gate::policy(Pemeriksaan::class, PemeriksaanPolicy::class);
        Gate::policy(Obat::class, ObatPolicy::class);
        Gate::policy(Poli::class, PoliPolicy::class);
        Gate::policy(ResepObat::class, ResepObatPolicy::class);
    }
}
