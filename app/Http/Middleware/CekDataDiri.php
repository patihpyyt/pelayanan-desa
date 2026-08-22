<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekDataDiri
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();

        if (
            $user->role === 'warga' &&
            (
                empty($user->nik) ||
                empty($user->no_hp) ||
                empty($user->alamat)
            )
        ) {
            return redirect()->route('warga.profil');
        }

        return $next($request);
    }
}