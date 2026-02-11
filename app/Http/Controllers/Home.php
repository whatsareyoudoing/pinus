<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Admin\Agenda;
use App\Http\Controllers\Controller;
use App\Models\Agenda_model;
use App\Models\Berita_model;
use App\Models\Download_model;
use App\Models\Mitra_model;
use App\Models\Rekening_model;
use App\Models\Staff_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PDF;

class Home extends Controller
{
    // Homepage
    public function index()
    {
    	$site   = DB::table('konfigurasi')->first();
       // $videos         = DB::table('video')->orderBy('id_video','DESC')->get();
    	$slider         = DB::table('galeri')->where('jenis_galeri','Homepage')->limit(5)->orderBy('id_galeri', 'DESC')->get();
        $layanan        = DB::table('berita')->where(array('jenis_berita'=>'Layanan','status_berita'=>'Publish'))->orderBy('urutan', 'ASC')->get();
        $news           = new Berita_model();
        $event           = new Agenda_model();
        $partner           = new Mitra_model();
        $berita         = $news->home();
        $agenda         = $event->home();
        $mitra         = $partner->home();

        $data = array(  'title'         => $site->namaweb.' - '.$site->tagline,
                        'deskripsi'     => $site->namaweb.' - '.$site->tagline,
                        'keywords'      => $site->namaweb.' - '.$site->tagline,
                        'slider'        => $slider,
                        'site'   => $site,
                        'berita'        => $berita,
                        'recent_berita'        => $berita,
                        'agenda'       => $agenda,
                        'mitra'       => $mitra,
                        'layanan'       => $layanan,
                       // 'videos'         => $videos,
                        'content'       => 'home/index'
                    );
        return view('myview/home',$data);
    }

    // Homepage
    public function info()
    {
        $site   = DB::table('konfigurasi')->first();
        $news   = new Berita_model();
        $berita = $news->home();
        // Staff
        $kategori_staff  = DB::table('kategori_staff')->orderBy('urutan','ASC')->get();
        $layanan = DB::table('berita')->where(array('jenis_berita' => 'Layanan','status_berita' => 'Publish'))->orderBy('urutan', 'ASC')->get();

        $data = array(  'title'     => 'Tentang '.$site->namaweb,
                        'deskripsi' => 'Tentang '.$site->namaweb,
                        'keywords'  => 'Tentang '.$site->namaweb,
                        'site'      => $site,
                        'berita'    => $berita,
                        'recent_berita'       => $berita,
                        'layanan'   => $layanan,
                        'kategori_staff'     => $kategori_staff,
                        'content'   => 'home/aws'
                    );
        return view('myview/about',$data);
    }

    // kontak
    public function kontak()
    {
        $site_config   = DB::table('konfigurasi')->first();

        $data = array(  'title'     => 'Menghubungi '.$site_config->namaweb,
                        'deskripsi' => 'Kontak '.$site_config->namaweb,
                        'keywords'  => 'Kontak '.$site_config->namaweb,
                        'site_config'      => $site_config,
                        'content'   => 'home/kontak'
                    );
        return view('layout/wrapper',$data);
    }

}
