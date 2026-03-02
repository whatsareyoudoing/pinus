<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Image;

class Modul extends Controller
{
    // Index
    public function index()
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $modul   = DB::table('modul')->orderBy('id_modul','DESC')->get();

        $data = array(  'title'     => 'Data Modul',
                        'modul'  => $modul,
                        'content'   => 'admin/modul/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

     // Tambah
     public function tambah()
     {
         if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
       
 
         $data = array(  'title'             => 'Tambah Modul',
                         'content'           => 'admin/modul/tambah'
                     );
         return view('admin/layout/wrapper',$data);
     }

     
    // Edit
    public function edit($id_modul)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $modul   = DB::table('modul')->where('id_modul',$id_modul)->first();

        $data = array(  'title'     => 'Edit Data Modul',
                        'modul'     => $modul,
                        'content'   => 'admin/modul/edit'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // Proses
    public function proses(Request $request)
    {
        $site   = DB::table('konfigurasi')->first();
        // PROSES HAPUS MULTIPLE
        if(isset($_POST['hapus'])) {
            $id_modulnya       = $request->id_modul;
            for($i=0; $i < sizeof($id_modulnya);$i++) {
                DB::table('modul')->where('id_modul',$id_modulnya[$i])->delete();
            }
            return redirect('admin/modul')->with(['sukses' => 'Data telah dihapus']);
        // PROSES SETTING DRAFT
        }
    }

    // tambah
    public function tambah_proses(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        request()->validate([
                            'judul_modul'     => 'required',
                            'deskripsi1_modul'     => 'required|',
                            'deskripsi2_modul'     => 'required|'
                            ]);
       
            DB::table('modul')->insert([
                'judul_modul'        => $request->judul_modul,
                'deskripsi1_modul'    => $request->deskripsi1_modul,
                'deskripsi2_modul'    => $request->deskripsi2_modul,
                'tanggal_modul'     => date('Y-m-d H:i:s'),
                
            ]);
            return redirect('admin/modul')->with(['sukses' => 'Data telah ditambah']);
        
    }

    // edit
    public function proses_edit(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        request()->validate([
                                'judul_modul'     => 'required',
                                'deskripsi1_modul'     => 'required|',
                                'deskripsi2_modul'     => 'required|'
                            ]);
        
            DB::table('modul')->where('id_modul',$request->id_modul)->update([

                'judul_modul'        => $request->judul_modul,
                'deskripsi1_modul'    => $request->deskripsi1_modul,
                'deskripsi2_modul'    => $request->deskripsi2_modul
            ]);
            return redirect('admin/modul')->with(['sukses' => 'Data telah diupdate']);
        
    }

    // Delete
    public function delete($id_modul)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        DB::table('modul')->where('id_modul',$id_modul)->delete();
        return redirect('admin/modul')->with(['sukses' => 'Data telah dihapus']);
    }
}
