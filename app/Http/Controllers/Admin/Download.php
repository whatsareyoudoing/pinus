<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Image;
use App\Models\Download_model;

class Download extends Controller
{
    // Main page
    public function index()
    {
    	if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
    	$mydownload 			= new Download_model();
		$download 			= $mydownload->semua();
	
		$data = array(  'title'				=> 'Data Project',
						'download'			=> $download,
						
                        'content'			=> 'admin/project/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // Cari
    public function cari(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $mydownload           = new Download_model();
        $keywords           = $request->keywords;
        $download             = $mydownload->cari($keywords);
      

        $data = array(  'title'             => 'Data Project',
                        'download'            => $download,
                      
                        'content'           => 'admin/project/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // Proses
    public function proses(Request $request)
    {
        $site   = DB::table('konfigurasi')->first();
        // PROSES HAPUS MULTIPLE
        if(isset($_POST['hapus'])) {
            $id_downloadnya       = $request->id_download;
            for($i=0; $i < sizeof($id_downloadnya);$i++) {
                DB::table('download')->where('id_download',$id_downloadnya[$i])->delete();
            }
            return redirect('admin/project')->with(['sukses' => 'Data telah dihapus']);
        // PROSES SETTING DRAFT
        }elseif(isset($_POST['update'])) {
            $id_downloadnya       = $request->id_download;
            for($i=0; $i < sizeof($id_downloadnya);$i++) {
                DB::table('download')->where('id_download',$id_downloadnya[$i])->update([
                        'id_user'               => Session()->get('id_user')
                        
                    ]);
            }
            return redirect('admin/project')->with(['sukses' => 'Data kategori telah diubah']);
        }
    }

    //Status
    public function status_download($status_download)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $mydownload           = new Download_model();
        $download             = $mydownload->status_download($status_download);
       

        $data = array(  'title'             => 'Data Project',
                        'download'            => $download,
                        
                        'content'           => 'admin/project/index'
                    );
        return view('admin/layout/wrapper',$data);
    }

   

    // Tambah
    public function tambah()
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
    
        $data = array(  'title'             => 'Tambah Project',
                       
                        'content'           => 'admin/project/tambah'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // Unduh
    public function unduh($id_download)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $mydownload = new Download_model();
        $download   = $mydownload->detail($id_download);
        $hits       = $download->hits+1;
        DB::table('download')->where('id_download',$download->id_download)->update([
            'hits'      => $hits
        ]);
        $pathToFile           = './public/upload/file/'.$download->gambar;
        return response()->download($pathToFile, $download->gambar);
    }

    // edit
    public function edit($id_download)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        $mydownload           = new Download_model();
        $download             = $mydownload->detail($id_download);
       

        $data = array(  'title'             => 'Edit Project',
                        'download'            => $download,
                       
                        'content'           => 'admin/project/edit'
                    );
        return view('admin/layout/wrapper',$data);
    }

    // tambah
    public function tambah_proses(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        request()->validate([
                            'judul_download'  => 'required|unique:download',
                            'gambar'        => 'required|file|mimes:jpeg,png,jpg,pdf,doc,docx,xls,xlsx,ppt,pptx|max:8024',
                           
                            ]);
                   
        // UPLOAD START
        $image                  = $request->file('gambar');
        $filenamewithextension  = $request->file('gambar')->getClientOriginalName();
        $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        $input['nama_file']     = Str::slug($filename, '-').'-'.time().'.'.$image->getClientOriginalExtension();
        $destinationPath = './assets/upload/file';
        $image->move($destinationPath, $input['nama_file']);
        // END UPLOAD
       
        DB::table('download')->insert([
            
            'id_user'               => Session()->get('id_user'),
            'judul_download'        => $request->judul_download,
            'jenis_download'        =>'Download',
            'isi'                   => $request->isi,
            'file'                => $input['nama_file']
        
        ]);
        return redirect('admin/project')->with(['sukses' => 'Data telah ditambah']);
    }

    // edit
    public function edit_proses(Request $request)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        request()->validate([
                            'judul_download'    => 'required',
                            'gambar'        => 'required|file|mimes:jpeg,png,jpg,pdf,doc,docx,xls,xlsx,ppt,pptx|max:8024',
                           
                            ]);
        // UPLOAD START
        $image                  = $request->file('gambar');
        if(!empty($image)) {
            $filenamewithextension  = $request->file('gambar')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $input['nama_file']     = Str::slug($filename, '-').'-'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = './assets/upload/file';
            $image->move($destinationPath, $input['nama_file']);
            // END UPLOAD
            DB::table('download')->where('id_download',$request->id_download)->update([
              
                'id_user'               => Session()->get('id_user'),
                'judul_download'        => $request->judul_download,
                'jenis_download'        =>'Download',
                'isi'                   => $request->isi,
                'file'                => $input['nama_file']
                
            ]);
        }else{
            DB::table('download')->where('id_download',$request->id_download)->update([
               
                'id_user'               => Session()->get('id_user'),
                'judul_download'        => $request->judul_download,
                'jenis_download'        =>'Download',
                'isi'                   => $request->isi
               
            ]);
        }
        return redirect('admin/project')->with(['sukses' => 'Data telah ditambah']);
    }

    // Delete
    public function delete($id_download)
    {
        if(Session()->get('username')=="") { return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);}
        DB::table('download')->where('id_download',$id_download)->delete();
        return redirect('admin/project')->with(['sukses' => 'Data telah dihapus']);
    }
}
