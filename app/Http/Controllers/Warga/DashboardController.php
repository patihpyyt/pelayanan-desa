<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return view('warga.dashboard', compact('user'));
    }
}