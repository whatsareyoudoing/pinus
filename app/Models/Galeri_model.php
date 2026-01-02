<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Galeri_model extends Model
{

	protected $table 		= "galeri";
	protected $primaryKey 	= 'id_galeri';

    // listing
    public function semua()
    {
        $query = DB::table('galeri')
           
            ->where('galeri.jenis_galeri', '=','Homepage' ) 
            ->orderBy('galeri.id_galeri','DESC')
            ->get();
        return $query;
    }

    // listing
    public function cari($keywords)
    {
        $query = DB::table('galeri')
           
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
           
            ->where('status_galeri','Publish')
            ->orderBy('id_galeri','DESC')
            ->get();
        return $query;
    }



  

   

    // detail
    public function read($slug_galeri)
    {
        $query = DB::table('galeri')
           
            ->where('galeri.slug_galeri',$slug_galeri)
            ->orderBy('id_galeri','DESC')
            ->first();
        return $query;
    }

     // detail
    public function detail($id_galeri)
    {
        $query = DB::table('galeri')
            
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
