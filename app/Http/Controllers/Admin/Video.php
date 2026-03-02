<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Image;

class Video extends Controller
{
    // Index
    public function index()
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $video   = DB::table('video')->orderBy('id_video','DESC')->get();

        $data = array(  'title'     => 'Data Video',
                        'video'  => $video,
                        'content'   => 'admin/video/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

     // Tambah
     public function tambah()
     {
         if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
       
 
         $data = array(  'title'             => 'Tambah Video',
                         'content'           => 'admin/video/tambah'
                     );
         return view('admin/layout/wrapper',$data);
     }

     
    // Edit
    public function edit($id_video)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $video   = DB::table('video')->where('id_video',$id_video)->first();

        $data = array(  'title'     => 'Edit Data Video',
                        'video'     => $video,
                        'content'   => 'admin/video/edit'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // Proses
    public function proses(Request $request)
    {
        $site   = DB::table('konfigurasi')->first();
        // PROSES HAPUS MULTIPLE
        if(isset($_POST['hapus'])) {
            $id_videonya       = $request->id_video;
            for($i=0; $i < sizeof($id_videonya);$i++) {
                DB::table('video')->where('id_video',$id_videonya[$i])->delete();
            }
            return redirect('admin/video')->with(['sukses' => 'Data telah dihapus']);
        // PROSES SETTING DRAFT
        }
    }

    // tambah
    public function tambah_proses(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        request()->validate([
                            'judul_video'     => 'required',
                            'path_link_video'     => 'required|'
                            ]);
       
            DB::table('video')->insert([
                'judul_video'        => $request->judul_video,
                'deskripsi_video'    => $request->deskripsi_video,
                'path_link_video'    => $request->path_link_video,
                'tanggal_video'     => date('Y-m-d H:i:s'),
                
            ]);
            return redirect('admin/video')->with(['sukses' => 'Data telah ditambah']);
        
    }

    // edit
    public function proses_edit(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        request()->validate([
                           'judul_video'      => 'required',
                            'path_link_video'     => 'required'
                            ]);
        
            DB::table('video')->where('id_video',$request->id_video)->update([

                'judul_video'        => $request->judul_video,
                'deskripsi_video'    => $request->deskripsi_video,
                'path_link_video'    => $request->path_link_video,
               
            ]);
            return redirect('admin/video')->with(['sukses' => 'Data telah diupdate']);
        
    }

    // Delete
    public function delete($id_video)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        DB::table('video')->where('id_video',$id_video)->delete();
        return redirect('admin/video')->with(['sukses' => 'Data telah dihapus']);
    }
}
