<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Pagination\Paginator;
use Image;
use App\Models\Mitra_model;

class Mitra extends Controller
{
    // Main page
    public function index()
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        Paginator::useBootstrap();
    	$myagenda 	= new Mitra_model();
		$agenda 	= $myagenda->semua();
		
		$data = array(  'title'       => 'Data Mitra',
						'agenda'      => $agenda,
						
                        'content'     => 'admin/mitra/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

   

    // Cari
    public function cari(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $mymitra           = new Mitra_model();
        $keywords           = $request->keywords;
        $mitra             = $mymitra->cari($keywords);
       

        $data = array(  'title'             => 'Data Mitra',
                        'agenda'            => $mitra,
                       
                        'content'           => 'admin/mitra/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // Proses
    public function proses(Request $request)
    {
        $site           = DB::table('konfigurasi')->first();
        $pengalihan     = $request->pengalihan;
        // PROSES HAPUS MULTIPLE
        if(isset($_POST['hapus'])) {
            $id_agendanya       = $request->id_mitra;
            for($i=0; $i < sizeof($id_agendanya);$i++) {
                DB::table('mitra')->where('id_mitra',$id_agendanya[$i])->delete();
            }
            return redirect($pengalihan)->with(['sukses' => 'Data telah dihapus']);
        // PROSES SETTING DRAFT
        }elseif(isset($_POST['draft'])) {
            $id_agendanya       = $request->id_mitra;
            for($i=0; $i < sizeof($id_agendanya);$i++) {
                DB::table('mitra')->where('id_mitra',$id_agendanya[$i])->update([
                        'id_user'       => Session()->get('id_user'),
                        'status_mitra' => 'Draft'
                    ]);
            }
            return redirect($pengalihan)->with(['sukses' => 'Data telah diubah menjadi Draft']);
        // PROSES SETTING PUBLISH
        }elseif(isset($_POST['publish'])) {
            $id_agendanya       = $request->id_mitra;
            for($i=0; $i < sizeof($id_agendanya);$i++) {
                DB::table('mitra')->where('id_mitra',$id_agendanya[$i])->update([
                        'id_user'       => Session()->get('id_user'),
                        'status_mitra' => 'Publish'
                    ]);
            }
            return redirect($pengalihan)->with(['sukses' => 'Data telah diubah menjadi Publish']);
        }
    }

    //Status
    public function status_agenda($status_agenda)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        Paginator::useBootstrap();
        $myagenda    = new Mitra_model();
        $agenda      = $myagenda->status_agenda($status_agenda);
      

        $data = array(  'title'             => 'Status Mitra: '.$status_agenda,
                        'agenda'            => $agenda,
                       
                        'content'           => 'admin/mitra/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

    //Status
    public function jenis_agenda($jenis_agenda)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        Paginator::useBootstrap();
        $myagenda    = new Mitra_model();
        $agenda      = $myagenda->jenis_agenda($jenis_agenda);
       

        $data = array(  'title'             => 'Jenis Agenda: '.$jenis_agenda,
                        'agenda'            => $agenda,
                       
                        'content'           => 'admin/mitra/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

   
   
    // Tambah
    public function tambah()
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
      

        $data = array(  'title'             => 'Tambah Mitra',
                       
                        'content'           => 'admin/mitra/tambah'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // edit
    public function edit($id_mitra)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $myagenda           = new Mitra_model();
        $agenda             = $myagenda->detail($id_mitra);
       //dd($agenda);

        $data = array(  'title'             => 'Edit Agenda',
                        'agenda'            => $agenda,
                     
                        'content'           => 'admin/mitra/edit'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // tambah
    public function tambah_proses(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        request()->validate([
                            'nama_mitra'  => 'required|unique:mitra',
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
         
            DB::table('mitra')->insert([
               
                'id_user'           => Session()->get('id_user'),
                'nama_mitra'       => $request->nama_mitra,
                'isi'               => $request->isi,
                'status_mitra'     => $request->status_mitra,
                'gambar'            => $input['nama_file']
              
               
            
                
            ]);
        }else{
            $slug_agenda = Str::slug($request->judul_agenda, '-');
            DB::table('mitra')->insert([

                'id_user'           => Session()->get('id_user'),
                'nama_mitra'       => $request->nama_mitra,
                'isi'               => $request->isi,
                'status_mitra'     => $request->status_mitra
              
               

            
            ]);
        }
        return redirect('admin/mitra')->with(['sukses' => 'Data telah ditambah']);
    }

    // edit
    public function edit_proses(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        request()->validate([
                            'nama_mitra'   => 'required',
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
          
            DB::table('mitra')->where('id_mitra',$request->id_mitra)->update([
                
                'id_user'           => Session()->get('id_user'),
                'nama_mitra'       => $request->nama_mitra,
                'isi'               => $request->isi,
                'status_mitra'     => $request->status_mitra,
                'gambar'            => $input['nama_file']


                
            ]);
        }else{
           
            DB::table('mitra')->where('id_mitra',$request->id_mitra)->update([
                'id_user'           => Session()->get('id_user'),
                'nama_mitra'       => $request->nama_mitra,
                'isi'               => $request->isi,
                'status_mitra'     => $request->status_mitra

            ]);
                
        }
        return redirect('admin/mitra')->with(['sukses' => 'Data telah ditambah']);
    }

    // Delete
    public function delete($id_mitra)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        DB::table('mitra')->where('id_mitra',$id_mitra)->delete();
        return redirect('admin/mitra')->with(['sukses' => 'Data telah dihapus']);
    }
}
