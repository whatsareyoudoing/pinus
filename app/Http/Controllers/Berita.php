<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use App\Models\Berita_model;
Paginator::useBootstrap();

class Berita extends Controller
{

    // Beritapage
    public function index()
    {
        Paginator::useBootstrap();
    	$site 	= DB::table('konfigurasi')->first();
    	$model 	= new Berita_model();
		$berita = $model->listing();
		$kategori = $model->list_kategori();
		$recent_berita = $model->home();

        $data = array(  'title'     => 'Berita dan Update',
                        'deskripsi' => 'Berita dan Update',
                        'keywords'  => 'Berita dan Update',
                        'site'		=> $site,
                        'berita'	=> $berita,
                        'kategori'    => $kategori,
                        'recent_berita'    => $recent_berita,
                        'content'   => 'berita/index'
                    );
        return view('myview/berita',$data);
    }

    // Beritapage
    public function kategori($slug_kategori)
    {
        Paginator::useBootstrap();
        $site       = DB::table('konfigurasi')->first();
        $kategori_show   = DB::table('kategori')->where('slug_kategori',$slug_kategori)->first();
         if(!$kategori_show)
        {
            return redirect('berita');
        }
        $id_kategori= $kategori_show->id_kategori;
        $model      = new Berita_model();
        $berita     = $model->kategori_depan($id_kategori);
        $kategori = $model->list_kategori();
		$recent_berita = $model->home();


        $data = array(  'title'     => $kategori_show->nama_kategori,
                        'deskripsi' => $kategori_show->nama_kategori,
                        'keywords'  => $kategori_show->nama_kategori,
                        'site'      => $site,
                        'berita'    => $berita,
                        'kategori'    => $kategori,
                        'recent_berita'    => $recent_berita,
                        'content'   => 'berita/index'
                    );
        return view('myview/berita',$data);
    }

    // kontak
    public function layanan($slug_berita)
    {
        Paginator::useBootstrap();
        $site   = DB::table('konfigurasi')->first();
        $model  = new Berita_model();
        $berita = $model->read($slug_berita);
        $layanan = DB::table('berita')->where(array('jenis_berita' => 'Layanan','status_berita' => 'Publish'))->orderBy('urutan', 'ASC')->get();
        if(!$berita)
        {
            return redirect('berita');
        }

        $data = array(  'title'     => $berita->judul_berita,
                        'deskripsi' => $berita->judul_berita,
                        'keywords'  => $berita->judul_berita,
                        'site'      => $site,
                        'berita'    => $berita,
                        'layanan'   => $layanan,
                        'content'   => 'berita/layanan'
                    );
        return view('layout/wrapper',$data);
    }

    // kontak
    public function terjadi($slug_berita)
    {
        Paginator::useBootstrap();
        $site   = DB::table('konfigurasi')->first();
        $model  = new Berita_model();
        $berita = $model->read($slug_berita);
        $layanan = DB::table('berita')->where(array('jenis_berita' => 'Layanan','status_berita' => 'Publish'))->orderBy('urutan', 'ASC')->get();
        if(!$berita)
        {
            return redirect('berita');
        }

        $data = array(  'title'     => $berita->judul_berita,
                        'deskripsi' => $berita->judul_berita,
                        'keywords'  => $berita->judul_berita,
                        'site'      => $site,
                        'berita'    => $berita,
                        'layanan'   => $layanan,
                        'content'   => 'berita/terjadi'
                    );
        return view('layout/wrapper',$data);
    }

    // kontak
    public function read($slug_berita)
    {
        Paginator::useBootstrap();
        $site   = DB::table('konfigurasi')->first();
        $slider = DB::table('galeri')->where('jenis_galeri','Beritapage')->orderBy('id_galeri', 'DESC')->first();
        // $berita = DB::table('berita')->where('status_berita','Publish')->orderBy('id_berita', 'DESC')->get();
        $model  = new Berita_model();
        $recent_berita = $model->home();
        $read   = $model->read($slug_berita);
        if(!$read)
        {
            return redirect('berita');
        }

        $data = array(  'title'     => $read->judul_berita,
                        'deskripsi' => $read->judul_berita,
                        'keywords'  => $read->judul_berita,
                        'slider'    => $slider,
                        'site'      => $site,
                        'read'      => $read,
                        'recent_berita'        => $recent_berita,
                        'content'   => 'berita/read'
                    );
        return view('myview/beritaDetail',$data);
    }

        // Cari
    public function cari(Request $request)
    {
        Paginator::useBootstrap();
    	$site 	= DB::table('konfigurasi')->first();
    	$model 	= new Berita_model();
		$berita             = $model->cariFrontend($request->keywords);
		$kategori = $model->list_kategori();
		$recent_berita = $model->home();

        $data = array(  'title'     => 'Berita dan Update',
                        'deskripsi' => 'Berita dan Update',
                        'keywords'  => 'Berita dan Update',
                        'site'		=> $site,
                        'berita'	=> $berita,
                        'kategori'    => $kategori,
                        'recent_berita'    => $recent_berita,
                        'content'   => 'berita/index'
                    );
        return view('myview/berita',$data);

    }
}
