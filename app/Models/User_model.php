<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User_model extends Model
{
    // kategori
    public function login($username,$password)
    {
    // 1. Cari user berdasarkan username saja
        $user = DB::table('users')
            ->where('username', $username)
            ->orderBy('id_user', 'DESC')
            ->first();

        // 2. Jika user ditemukan, cek apakah password cocok dengan hash di database
        if ($user && Hash::check($password, $user->password)) {
            return $user; // Login sukses, kembalikan data user
        }

        // 3. Jika tidak cocok atau user tidak ada
        return null;
    }
}
