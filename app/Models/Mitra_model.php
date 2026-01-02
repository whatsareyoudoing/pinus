<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mitra_model extends Model
{

	protected $table 		= "mitra";
	protected $primaryKey 	= 'id_mitra';

     // listing
    public function semua()
    {
        $query = DB::select("
        SELECT 
                a.id_mitra,
                a.nama_mitra,
                a.isi,
                a.status_mitra,
                a.gambar

            FROM mitra a
        ");

    
        return $query;
    }



    // listing
    public function cari($keywords)
    {
        $query = DB::select("
            SELECT 
                a.id_mitra,
                a.nama_mitra,
                a.isi,
                a.status_mitra,
                a.gambar
    
            FROM mitra a
            WHERE a.nama_mitra LIKE '%{$keywords}%'
            LIMIT 25
        ");
 
     

       
        return $query;
    }

 
    // listing
    public function listing()
    {
        $query = DB::select("
        SELECT 
                a.id_mitra,
                a.nama_mitra,
                a.isi,
                a.status_mitra,
                a.gambar

            FROM mitra a
            LIMIT 25
        ");

    

    	
        return $query;
    }

    // listing
    public function home()
    {  

        $query = DB::select("
        SELECT 
                a.id_mitra,
                a.nama_mitra,
                a.isi,
                a.status_mitra,
                a.gambar

            FROM mitra a
            LIMIT 3
        ");


       
        return $query;
    }

    // detail
    public function read($slug_agenda)
    {
        $query = DB::select("
        SELECT 
                a.id_mitra,
                a.nama_mitra,
                a.isi,
                a.status_mitra,
                a.gambar

            FROM mitra a
           
        ");

        
        return $query;
    }

      // detail
      public function detail($id_mitra)
      {
          $query = DB::table('mitra')
              
           
            
              ->where('mitra.id_mitra',$id_mitra)
              ->orderBy('id_mitra','DESC')
              ->first();
          return $query;
      }

     // detail
    public function detail2($id_mitra)
    {
        $query = DB::select("
        SELECT 
                a.id_mitra,
                a.nama_mitra,
                a.isi,
                a.status_mitra,
                a.gambar

            FROM mitra a
            WHERE a.id_mitra = '$id_mitra'
        ");

      
        return $query;
    }
}
