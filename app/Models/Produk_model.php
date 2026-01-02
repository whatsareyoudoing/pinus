<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produk_model extends Model
{

  
   
    public function semua()
    {
        $query = DB::select("
            SELECT 
                a.*,
                b.slug_kategori_produk,
                b.nama_kategori_produk
            FROM produk a
            LEFT JOIN  kategori_produk b ON b.id_kategori_produk = a.id_kategori_produk
           
        ");

       
        return $query;
    }

    public function all_kategori_produk()
    {
        $query = DB::select("
            SELECT 
                a.id_kategori_produk,
                a.slug_kategori_produk,
                a.nama_kategori_produk
            FROM kategori_produk a
            ORDER BY a.id_kategori_produk DESC
        ");

       
        return $query;
    }


    // listing
    public function cari($keywords)
    {
        $query = DB::table('galeri')
            ->join('kategori_galeri', 'kategori_galeri.id_kategori_galeri', '=', 'galeri.id_kategori_galeri','LEFT')
            ->select('galeri.*', 'kategori_galeri.slug_kategori_galeri', 'kategori_galeri.nama_kategori_galeri')
            ->where('galeri.judul_galeri', 'LIKE', "%{$keywords}%") 
            ->orWhere('galeri.isi', 'LIKE', "%{$keywords}%") 
            ->orderBy('id_galeri','DESC')
            ->get();
        return $query;
    }

    // listing
    public function listing()
    {
    	$query = DB::table('galeri')
            ->join('kategori_galeri', 'kategori_galeri.id_kategori_galeri', '=', 'galeri.id_kategori_galeri','LEFT')
            ->select('galeri.*', 'kategori_galeri.slug_kategori_galeri', 'kategori_galeri.nama_kategori_galeri')
            ->where('status_galeri','Publish')
            ->orderBy('id_galeri','DESC')
            ->get();
        return $query;
    }

    // kategori
    public function kategori_galeri($id_kategori_galeri)
    {
        $query = DB::table('galeri')
            ->join('kategori_galeri', 'kategori_galeri.id_kategori_galeri', '=', 'galeri.id_kategori_galeri','LEFT')
            ->select('galeri.*', 'kategori_galeri.slug_kategori_galeri', 'kategori_galeri.nama_kategori_galeri')
            ->where(array(  'galeri.status_galeri'         => 'Publish',
                            'galeri.id_kategori_galeri'    => $id_kategori_galeri))
            ->orderBy('id_galeri','DESC')
            ->get();
        return $query;
    }

    // kategori
    public function all_kategori_galeri($id_kategori_galeri)
    {
        $query = DB::table('galeri')
            ->join('kategori_galeri', 'kategori_galeri.id_kategori_galeri', '=', 'galeri.id_kategori_galeri','LEFT')
            ->select('galeri.*', 'kategori_galeri.slug_kategori_galeri', 'kategori_galeri.nama_kategori_galeri')
            ->where(array(  'galeri.id_kategori_galeri'    => $id_kategori_galeri))
            ->orderBy('id_galeri','DESC')
            ->get();
        return $query;
    }

    // kategori
    public function status_galeri($status_galeri)
    {
        $query = DB::table('galeri')
            ->join('kategori_galeri', 'kategori_galeri.id_kategori_galeri', '=', 'galeri.id_kategori_galeri','LEFT')
            ->select('galeri.*', 'kategori_galeri.slug_kategori_galeri', 'kategori_galeri.nama_kategori_galeri')
            ->where(array(  'galeri.jenis_galeri'         => $status_galeri))
            ->orderBy('id_galeri','DESC')
            ->get();
        return $query;
    }

    // kategori
    public function detail_kategori_galeri($id_kategori_galeri)
    {
        $query = DB::table('galeri')
            ->join('kategori_galeri', 'kategori_galeri.id_kategori_galeri', '=', 'galeri.id_kategori_galeri','LEFT')
            ->select('galeri.*', 'kategori_galeri.slug_kategori_galeri', 'kategori_galeri.nama_kategori_galeri')
            ->where(array(  'galeri.status_galeri'         => 'Publish',
                            'galeri.id_kategori_galeri'    => $id_kategori_galeri))
            ->orderBy('id_galeri','DESC')
            ->first();
        return $query;
    }

    // kategori
    public function detail_slug_kategori_galeri($slug_kategori_galeri)
    {
        $query = DB::table('galeri')
            ->join('kategori_galeri', 'kategori_galeri.id_kategori_galeri', '=', 'galeri.id_kategori_galeri','LEFT')
            ->select('galeri.*', 'kategori_galeri.slug_kategori_galeri', 'kategori_galeri.nama_kategori_galeri')
            ->where(array(  'galeri.status_galeri'                  => 'Publish',
                            'kategori_galeri.slug_kategori_galeri'  => $slug_kategori_galeri))
            ->orderBy('id_galeri','DESC')
            ->first();
        return $query;
    }


    // kategori
    public function slug_kategori_galeri($slug_kategori_galeri)
    {
        $query = DB::table('galeri')
            ->join('kategori_galeri', 'kategori_galeri.id_kategori_galeri', '=', 'galeri.id_kategori_galeri','LEFT')
            ->select('galeri.*', 'kategori_galeri.slug_kategori_galeri', 'kategori_galeri.nama_kategori_galeri')
            ->where(array(  'galeri.status_galeri'                  => 'Publish',
                            'kategori_galeri.slug_kategori_galeri'  => $slug_kategori_galeri))
            ->orderBy('id_galeri','DESC')
            ->get();
        return $query;
    }

    // detail
    public function read($slug_galeri)
    {
        $query = DB::table('galeri')
            ->join('kategori_galeri', 'kategori_galeri.id_kategori_galeri', '=', 'galeri.id_kategori_galeri','LEFT')
            ->select('galeri.*', 'kategori_galeri.slug_kategori_galeri', 'kategori_galeri.nama_kategori_galeri')
            ->where('galeri.slug_galeri',$slug_galeri)
            ->orderBy('id_galeri','DESC')
            ->first();
        return $query;
    }

     // detail
    public function detail($id_galeri)
    {
        $query = DB::table('galeri')
            ->join('kategori_galeri', 'kategori_galeri.id_kategori_galeri', '=', 'galeri.id_kategori_galeri','LEFT')
            ->select('galeri.*', 'kategori_galeri.slug_kategori_galeri', 'kategori_galeri.nama_kategori_galeri')
            ->where('galeri.id_galeri',$id_galeri)
            ->orderBy('id_galeri','DESC')
            ->first();
        return $query;
    }

    // Gambar
    public function gambar($id_galeri)
    {
        $query = DB::table('gambar_galeri')
            ->select('*')
            ->where('gambar_galeri.id_galeri',$id_galeri)
            ->orderBy('id_galeri','DESC')
            ->get();
        return $query;
    }
}
