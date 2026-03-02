<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Video_model extends Model
{

	protected $table 		= "video";
	protected $primaryKey 	= 'id_video';

     // listing
    public function semua()
    {
        $query = DB::select("
        SELECT
                a.id_video,
                a.judul_video,
                a.path_link_video,
                a.deskripsi_video

            FROM video a
        ");


        return $query;
    }



    // listing
    public function cari($keywords)
    {
        $query = DB::select("
            SELECT
                  a.id_video,
                a.judul_video,
                a.path_link_video,
                a.deskripsi_video


            FROM video a
            WHERE a.judul_video LIKE '%{$keywords}%'
            LIMIT 25
        ");




        return $query;
    }


    // listing
    public function listing()
    {
        $query = DB::select("
        SELECT
                  a.id_video,
                a.judul_video,
                a.path_link_video,
                a.deskripsi_video
            FROM video a
            LIMIT 25
        ");




        return $query;
    }

    // listing
    public function home()
    {

        $query = DB::select("
        SELECT
                  a.id_video,
                a.judul_video,
                a.path_link_video,
                a.deskripsi_video

            FROM video a

        ");



        return $query;
    }

    // detail
    public function read($slug_agenda)
    {
        $query = DB::select("
        SELECT
                  a.id_video,
                a.judul_video,
                a.path_link_video,
                a.deskripsi_video

            FROM video a

        ");


        return $query;
    }

      // detail
      public function detail($id_video)
      {
          $query = DB::table('video')



              ->where('video.id_video',$id_video)
              ->orderBy('id_video','DESC')
              ->first();
          return $query;
      }

     // detail
    public function detail2($id_video)
    {
        $query = DB::select("
        SELECT
                a.id_video,
                a.judul_video,
                a.path_link_video,
                a.deskripsi_video

            FROM video a
            WHERE a.id_video = '$id_video'
        ");


        return $query;
    }
}
