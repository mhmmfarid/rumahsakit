<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetugasDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if (! $user || ! $user->hasRole('petugas')) {
            abort(403);
        }

        return view('petugas.dashboard');
    }
}
