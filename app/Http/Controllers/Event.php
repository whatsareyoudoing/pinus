<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Agenda_model;
use App\Models\Berita_model;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Image;

class Event extends Controller
{
    // Main page
    public function index()
    {
        Paginator::useBootstrap();
    	$site 	= DB::table('konfigurasi')->first();
    	$model 	= new Agenda_model();
		$event = $model->listing();
		$kategori = $model->kategori_agenda();
		$recent_event = $model->home();
        $news           = new Berita_model();
        $berita         = $news->home();
        // dd($recent_event);

        $data = array(  'title'     => 'Acara dan Update',
                        'deskripsi' => 'Acara dan Update',
                        'keywords'  => 'Acara dan Update',
                        'recent_berita'        => $berita,
                        'site'		=> $site,
                        'event'	=> $event,
                        'kategori'    => $kategori,
                        'recent_event'    => $recent_event,
                    );
        return view('myview/event',$data);
    }


    // Add
    public function add()
    {
        $data = array(  'title'       => 'Data Acara'
                    );
        return view('admin/acara/add',$data);
    }

    // // Cari
    // public function cari(Request $request)
    // {
    //     if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
    //     $myagenda           = new Agenda_model();
    //     $keywords           = $request->keywords;
    //     $acara             = $myagenda->cari($keywords);
    //     $kategori_agenda    = DB::table('kategori_agenda')->orderBy('urutan','ASC')->get();

    //     $data = array(  'title'             => 'Data Acara',
    //                     'acara'            => $acara,
    //                     'kategori_agenda'   => $kategori_agenda,
    //                     'content'           => 'admin/acara/index'
    //                 );
    //     return view('admin/layout/wrapper',$data);
    // }

    public function cari(Request $request)
    {
        Paginator::useBootstrap();
    	$site 	= DB::table('konfigurasi')->first();
    	$model 	= new Agenda_model();
    	$model_berita 	= new Berita_model();
        $event = $model->cariFrontend($request->keywords);
		$kategori = $model->kategori_agenda();
		$recent_event = $model->home();
		$recent_berita = $model_berita->home();

        $data = array(  'title'     => 'Berita dan Update',
                        'deskripsi' => 'Berita dan Update',
                        'keywords'  => 'Berita dan Update',
                        'site'		=> $site,
                        'event'	=> $event,
                        'kategori'    => $kategori,
                        'recent_berita'    => $recent_berita,
                        'recent_event'    => $recent_event,
                        'content'   => 'berita/index'
                    );
        return view('myview/event',$data);

    }

    // Proses
    public function proses(Request $request)
    {
        $site           = DB::table('konfigurasi')->first();
        $pengalihan     = $request->pengalihan;
        // PROSES HAPUS MULTIPLE
        if(isset($_POST['hapus'])) {
            $id_agendanya       = $request->id_agenda;
            for($i=0; $i < sizeof($id_agendanya);$i++) {
                DB::table('acara')->where('id_agenda',$id_agendanya[$i])->delete();
            }
            return redirect($pengalihan)->with(['sukses' => 'Data telah dihapus']);
        // PROSES SETTING DRAFT
        }elseif(isset($_POST['draft'])) {
            $id_agendanya       = $request->id_agenda;
            for($i=0; $i < sizeof($id_agendanya);$i++) {
                DB::table('acara')->where('id_agenda',$id_agendanya[$i])->update([
                        'id_user'       => Session()->get('id_user'),
                        'status_agenda' => 'Draft'
                    ]);
            }
            return redirect($pengalihan)->with(['sukses' => 'Data telah diubah menjadi Draft']);
        // PROSES SETTING PUBLISH
        }elseif(isset($_POST['publish'])) {
            $id_agendanya       = $request->id_agenda;
            for($i=0; $i < sizeof($id_agendanya);$i++) {
                DB::table('acara')->where('id_agenda',$id_agendanya[$i])->update([
                        'id_user'       => Session()->get('id_user'),
                        'status_agenda' => 'Publish'
                    ]);
            }
            return redirect($pengalihan)->with(['sukses' => 'Data telah diubah menjadi Publish']);
        }elseif(isset($_POST['update'])) {
            $id_agendanya       = $request->id_agenda;
            for($i=0; $i < sizeof($id_agendanya);$i++) {
                DB::table('acara')->where('id_agenda',$id_agendanya[$i])->update([
                        'id_user'        => Session()->get('id_user'),
                        'id_kategori_agenda'    => $request->id_kategori_agenda
                    ]);
            }
            return redirect($pengalihan)->with(['sukses' => 'Data kategori_agenda telah diubah']);
        }
    }

    //Status
    public function status_agenda($status_agenda)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        Paginator::useBootstrap();
        $myagenda    = new Agenda_model();
        $acara      = $myagenda->status_agenda($status_agenda);
        $kategori_agenda    = DB::table('kategori_agenda')->orderBy('urutan','ASC')->get();

        $data = array(  'title'             => 'Status Acara: '.$status_agenda,
                        'acara'            => $acara,
                        'kategori_agenda'   => $kategori_agenda,
                        'content'           => 'admin/acara/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

    //Status
    public function jenis_agenda($jenis_agenda)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        Paginator::useBootstrap();
        $myagenda    = new Agenda_model();
        $acara      = $myagenda->jenis_agenda($jenis_agenda);
        $kategori_agenda    = DB::table('kategori_agenda')->orderBy('urutan','ASC')->get();

        $data = array(  'title'             => 'Jenis Acara: '.$jenis_agenda,
                        'acara'            => $acara,
                        'kategori_agenda'   => $kategori_agenda,
                        'content'           => 'admin/acara/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

    //Status
    public function author($id_user)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        Paginator::useBootstrap();
        $myagenda           = new Agenda_model();
        $acara             = $myagenda->author($id_user);
        $kategori_agenda    = DB::table('kategori_agenda')->orderBy('urutan','ASC')->get();
        $author    = DB::table('users')->where('id_user',$id_user)->orderBy('id_user','ASC')->first();

        $data = array(  'title'             => 'Data Acara dengan Penulis: '.$author->nama,
                        'acara'            => $acara,
                        'kategori_agenda'   => $kategori_agenda,
                        'content'           => 'admin/acara/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

    //Kategori
    public function kategori($slug_kategori)
    {
        Paginator::useBootstrap();
        $site       = DB::table('konfigurasi')->first();
        $kategori_show   = DB::table('kategori_agenda')->where('slug_kategori_agenda',$slug_kategori)->first();
        // dd($kategori_show,$slug_kategori);
         if(!$kategori_show)
        {
            return redirect('event');
        }
        $id_kategori= $kategori_show->id_kategori_agenda;

        $model      = new Agenda_model();
        $model_berita     = new Berita_model();
        $event     = $model->kategori_depan($id_kategori);
        $kategori = $model->list_kategori();
		$recent_agenda = $model->home();
		$recent_berita = $model_berita->home();


        $data = array(  'title'     => $kategori_show->nama_kategori_agenda,
                        'deskripsi' => $kategori_show->nama_kategori_agenda,
                        'keywords'  => $kategori_show->nama_kategori_agenda,
                        'site'      => $site,
                        'event'    => $event,
                        'kategori'    => $kategori,
                        'recent_agenda'    => $recent_agenda,
                        'recent_berita'    => $recent_berita,
                        'content'   => 'event/index'
                    );
        return view('myview/event',$data);
    }

    public function read($slug_agenda)
    {
        Paginator::useBootstrap();
        $site   = DB::table('konfigurasi')->first();
        $slider = DB::table('galeri')->where('jenis_galeri','Beritapage')->orderBy('id_galeri', 'DESC')->first();
        // $acara = DB::table('acara')->where('status_berita','Publish')->orderBy('id_berita', 'DESC')->get();
        $model  = new Agenda_model();
        $model_berita     = new Berita_model();
        $recent_berita = $model_berita->home();
        $recent_event = $model->home();
        $read   = $model->read($slug_agenda);
        if(!$read)
        {
            return redirect('acara');
        }

        $data = array(  'title'     => $read->judul_agenda,
                        'deskripsi' => $read->judul_agenda,
                        'keywords'  => $read->judul_agenda,
                        'slider'    => $slider,
                        'site'      => $site,
                        'read'      => $read,
                        'recent_event'        => $recent_event,
                        'recent_berita'    => $recent_berita,
                        'content'   => 'acara/read'
                    );

        return view('myview/eventDetail',$data);
    }


    // Tambah
    public function tambah()
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $kategori_agenda    = DB::table('kategori_agenda')->orderBy('urutan','ASC')->get();

        $data = array(  'title'             => 'Tambah Acara',
                        'kategori_agenda'   => $kategori_agenda,
                        'content'           => 'admin/acara/tambah'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // edit
    public function edit($id_agenda)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $myagenda           = new Agenda_model();
        $acara             = $myagenda->detail($id_agenda);
        $kategori_agenda    = DB::table('kategori_agenda')->orderBy('urutan','ASC')->get();

        $data = array(  'title'             => 'Edit Acara',
                        'acara'            => $acara,
                        'kategori_agenda'   => $kategori_agenda,
                        'content'           => 'admin/acara/edit'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // tambah
    public function tambah_proses(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        request()->validate([
                            'judul_agenda'  => 'required|unique:acara',
                            'isi'           => 'required',
                            'gambar'        => 'file|image|mimes:jpeg,png,jpg|max:8024',
                            ]);
        // UPLOAD START
        $image                  = $request->file('gambar');
        if(!empty($image)) {
            $filenamewithextension  = $request->file('gambar')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $input['nama_file']     = Str::slug($filename, '-').'-'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath        = './assets/upload/image/thumbs/';
            $img = Image::make($image->getRealPath(),array(
                'width'     => 150,
                'height'    => 150,
                'grayscale' => false
            ));
            $img->save($destinationPath.'/'.$input['nama_file']);
            $destinationPath = './assets/upload/image/';
            $image->move($destinationPath, $input['nama_file']);
            // END UPLOAD
            $slug_agenda = Str::slug($request->judul_agenda, '-');
            DB::table('acara')->insert([
                'id_kategori_agenda'       => $request->id_kategori_agenda,
                'id_user'           => Session()->get('id_user'),
                'slug_agenda'       => $slug_agenda,
                'judul_agenda'      => $request->judul_agenda,
                'isi'               => $request->isi,
                'jenis_agenda'      => $request->jenis_agenda,
                'status_agenda'     => $request->status_agenda,

                'tanggal_mulai'     => tanggal('tanggal_input',$request->tanggal_mulai),
                'tanggal_selesai'   => tanggal('tanggal_input',$request->tanggal_selesai),
                'jam_mulai'         => $request->jam_mulai,
                'jam_selesai'       => $request->jam_selesai,

                'tempat'            => $request->tempat,
               'gambar'            => $input['nama_file'],


                'tanggal_post'      => date('Y-m-d H:i:s')
            ]);
        }else{
            $slug_agenda = Str::slug($request->judul_agenda, '-');
            DB::table('acara')->insert([
                'id_kategori_agenda'       => $request->id_kategori_agenda,
                'id_user'           => Session()->get('id_user'),
                'slug_agenda'       => $slug_agenda,
                'judul_agenda'      => $request->judul_agenda,
                'isi'               => $request->isi,
                'jenis_agenda'      => $request->jenis_agenda,
                'status_agenda'     => $request->status_agenda,
                'tanggal_mulai'     => tanggal('tanggal_input',$request->tanggal_mulai),
                'tanggal_selesai'   => tanggal('tanggal_input',$request->tanggal_selesai),
                'jam_mulai'         => $request->jam_mulai,
                'jam_selesai'       => $request->jam_selesai,
                'tempat'            => $request->tempat,
                'tanggal_post'      => date('Y-m-d H:i:s')
            ]);
        }
        return redirect('admin/acara')->with(['sukses' => 'Data telah ditambah']);
    }

    // edit
    public function edit_proses(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        request()->validate([
                            'judul_agenda'   => 'required',
                            'isi'           => 'required',
                            'gambar'        => 'file|image|mimes:jpeg,png,jpg|max:8024',
                            ]);
        // UPLOAD START
        $image                  = $request->file('gambar');
        if(!empty($image)) {
            $filenamewithextension  = $request->file('gambar')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $input['nama_file']     = Str::slug($filename, '-').'-'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath        = './assets/upload/image/thumbs/';
            $img = Image::make($image->getRealPath(),array(
                'width'     => 150,
                'height'    => 150,
                'grayscale' => false
            ));
            $img->save($destinationPath.'/'.$input['nama_file']);
            $destinationPath = './assets/upload/image/';
            $image->move($destinationPath, $input['nama_file']);
            // END UPLOAD
            $slug_agenda = Str::slug($request->judul_agenda, '-');
            DB::table('acara')->where('id_agenda',$request->id_agenda)->update([
                'id_kategori_agenda'       => $request->id_kategori_agenda,
                'id_user'           => Session()->get('id_user'),
                'slug_agenda'       => $slug_agenda,
                'judul_agenda'      => $request->judul_agenda,
                'isi'               => $request->isi,
                'jenis_agenda'      => $request->jenis_agenda,
                'status_agenda'     => $request->status_agenda,
                'tanggal_mulai'     => tanggal('tanggal_input',$request->tanggal_mulai),
                'tanggal_selesai'   => tanggal('tanggal_input',$request->tanggal_selesai),
                'jam_mulai'         => $request->jam_mulai,
                'jam_selesai'       => $request->jam_selesai,
                'tempat'            => $request->tempat,
                'gambar'            => $input['nama_file']

            ]);
        }else{
            $slug_agenda = Str::slug($request->judul_agenda, '-');
            DB::table('acara')->where('id_agenda',$request->id_agenda)->update([
                'id_kategori_agenda'       => $request->id_kategori_agenda,
                'id_user'           => Session()->get('id_user'),
                'slug_agenda'       => $slug_agenda,
                'judul_agenda'      => $request->judul_agenda,
                'isi'               => $request->isi,
                'jenis_agenda'      => $request->jenis_agenda,
                'status_agenda'     => $request->status_agenda,
                'tanggal_mulai'     => tanggal('tanggal_input',$request->tanggal_mulai),
                'tanggal_selesai'   => tanggal('tanggal_input',$request->tanggal_selesai),
                'jam_mulai'         => $request->jam_mulai,
                'jam_selesai'       => $request->jam_selesai,
                'tempat'            => $request->tempat
            ]);

        }
        return redirect('admin/acara')->with(['sukses' => 'Data telah ditambah']);
    }

    // Delete
    public function delete($id_agenda)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        DB::table('acara')->where('id_agenda',$id_agenda)->delete();
        return redirect('admin/acara')->with(['sukses' => 'Data telah dihapus']);
    }
}
