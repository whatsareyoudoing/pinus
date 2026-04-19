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

class Layanan extends Controller
{
// Main page
    public function PelatihanSar()
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

        return view('myview/pelatihanSar',$data);
    }

    public function pelatihanSarDetail()
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

        return view('myview/pelatihanSarDetail',$data);
    }

    public function produk()
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

        return view('myview/produk',$data);
    }

    public function produkDetail()
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

        return view('myview/produkDetail',$data);
    }


}
