<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Image;
use App\Models\Download_model;
use App\Models\Agenda_model;
use App\Models\Berita_model;
use Illuminate\Pagination\Paginator;

class Kontak extends Controller
{
// Main page
    public function index()
    {

        Paginator::useBootstrap();
    	$site 	= DB::table('konfigurasi')->first();
        $news           = new Berita_model();
        $berita         = $news->home();

        // dd($recent_agenda);

        $data = array(  'title'     => 'Dokumen Pinus',
                        'deskripsi' => 'Dokumen Pinus',
                        'keywords'  => 'Dokumen Pinus',
                        'recent_berita'        => $berita,
                        'site'		=> $site,

                    );

        return view('myview/kontak',$data);
    }
}
