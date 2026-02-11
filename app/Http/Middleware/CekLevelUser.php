<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CekLevelUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah user sudah login
        if (!Session()->has('akses_level')) {
            return redirect('login')->with('error', 'Silakan login terlebih dahulu');
        }

        $level = Session()->get('akses_level');
        
        // Jika Admin - akses semua
        if ($level == 'Admin') {
            return $next($request);
        }
        
        // Jika User Biasa - hanya akses menu tertentu
        if ($level == 'User') {
            // Daftar route yang boleh diakses user biasa
            $allowedRoutes = [
                'admin/dasbor',
                'admin/berita',
                'admin/kategori',
                'admin/agenda',
                'admin/kategori_agenda'
                // Tambahkan route lain yang diizinkan untuk user
            ];
            
            $currentPath = $request->path();
            
            // Cek apakah route saat ini diizinkan
            foreach ($allowedRoutes as $route) {
                if (str_contains($currentPath, $route)) {
                    return $next($request);
                }
            }
            
            // Jika tidak diizinkan, redirect ke dashboard dengan pesan error
            return redirect('admin/dasbor')->with('error', 'Anda tidak memiliki akses ke halaman tersebut');
        }
        
        // Jika level tidak dikenal
        return redirect('login')->with('error', 'Level user tidak valid');
    }
}