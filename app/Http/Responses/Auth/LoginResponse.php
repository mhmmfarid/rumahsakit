<?php

namespace App\Http\Responses\Auth;

use Filament\Facades\Filament;
use Filament\Http\Responses\Auth\Contracts\LoginResponse as Responsable;
use Illuminate\Http\RedirectResponse;
use Livewire\Features\SupportRedirects\Redirector;

class LoginResponse implements Responsable
{
    public function toResponse($request): RedirectResponse | Redirector
    {
        $user = Filament::auth()->user();

        // Redirect petugas ke dashboard non-Filament
        if ($user && $user->hasRole('petugas')) {
            return redirect()->intended(route('petugas.dashboard'));
        }

        // Redirect admin ke Filament dashboard
        return redirect()->intended(Filament::getUrl());
    }
}
