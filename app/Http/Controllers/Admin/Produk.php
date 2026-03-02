<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Image;

class Produk extends Controller
{
    // Index
    public function index()
    {

       // return 'awdada';
        if (Session()->get('username') == "") {
            return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }
        $produk   = DB::table('produk')->orderBy('id_produk', 'DESC')->get();

        $data = array(
            'title'     => 'Data Produk',
            'produk'  => $produk,
            'content'   => 'admin/produk/index'
        );
        return view('admin/layout/wrapper', $data);
    }

    // Tambah
    public function tambah()
    {
        if (Session()->get('username') == "") {
            return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }


        $data = array(
            'title'             => 'Tambah Produk',
            'content'           => 'admin/produk/tambah'
        );
        return view('admin/layout/wrapper', $data);
    }


    // Edit
    public function edit($id_video)
    {
        if (Session()->get('username') == "") {
            return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }
        $produk   = DB::table('produk')->where('id_produk', $id_video)->first();

        $data = array(
            'title'     => 'Edit Data Produk',
            'produk'     => $produk,
            'content'   => 'admin/produk/edit'
        );
        return view('admin/layout/wrapper', $data);
    }

    // Proses
    public function proses(Request $request)
    {
        $site   = DB::table('konfigurasi')->first();
        // PROSES HAPUS MULTIPLE
        if (isset($_POST['hapus'])) {
            $id_produknya       = $request->id_produk;
            for ($i = 0; $i < sizeof($id_produknya); $i++) {
                DB::table('produk')->where('id_produk', $id_produknya[$i])->delete();
            }
            return redirect('admin/produk')->with(['sukses' => 'Data telah dihapus']);
            // PROSES SETTING DRAFT
        }
    }

    // tambah
    public function tambah_proses(Request $request)
    {
        if (Session()->get('username') == "") {
            return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }
        request()->validate([
            'judul_produk'     => 'required',
            'path_link_produk'     => 'required|',
            'path_gambar_produk'        => 'file|image|mimes:jpeg,png,jpg|max:8024',
        ]);

        $image  = $request->file('path_gambar_produk');
        if (!empty($image)) {
            $filenamewithextension  = $request->file('path_gambar_produk')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $input['nama_file']     = Str::slug($filename, '-') . '-' . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath        = './assets/upload/image/thumbs/';
            $img = Image::make($image->getRealPath(), array(
                'width'     => 150,
                'height'    => 150,
                'grayscale' => false
            ));
            $img->save($destinationPath . '/' . $input['nama_file']);
            $destinationPath = './assets/upload/image/';
            $image->move($destinationPath, $input['nama_file']);
            // END UPLOAD

            DB::table('produk')->insert([
                
                'judul_produk'        => $request->judul_produk,
                'deskripsi_produk'    => $request->deskripsi_produk,
                'path_link_produk'    => $request->path_link_produk,
                'path_gambar_produk'            =>  $input['nama_file'],
                'tanggal_produk'     => date('Y-m-d H:i:s')


               

            ]);
        } else {

            DB::table('produk')->insert([
                'judul_produk'        => $request->judul_produk,
                'deskripsi_produk'    => $request->deskripsi_produk,
                'path_link_produk'    => $request->path_link_produk,
                'tanggal_produk'     => date('Y-m-d H:i:s')

            ]);
        }
        return redirect('admin/produk')->with(['sukses' => 'Data telah ditambah']);
    }

    // edit
    public function proses_edit(Request $request)
    {
        if (Session()->get('username') == "") {
            return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }
        request()->validate([
           'judul_produk'     => 'required',
            'path_link_produk'     => 'required|',
            'path_gambar_produk'        => 'file|image|mimes:jpeg,png,jpg|max:8024',
        ]);

        $image  = $request->file('path_gambar_produk');
        if (!empty($image)) {
            $filenamewithextension  = $request->file('path_gambar_produk')->getClientOriginalName();
            $filename               = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $input['nama_file']     = Str::slug($filename, '-') . '-' . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath        = './assets/upload/image/thumbs/';
            $img = Image::make($image->getRealPath(), array(
                'width'     => 150,
                'height'    => 150,
                'grayscale' => false
            ));
            $img->save($destinationPath . '/' . $input['nama_file']);
            $destinationPath = './assets/upload/image/';
            $image->move($destinationPath, $input['nama_file']);
            // END UPLOAD

           

            DB::table('produk')->where('id_produk', $request->id_produk)->update([

                
                'judul_produk'        => $request->judul_produk,
                'deskripsi_produk'    => $request->deskripsi_produk,
                'path_link_produk'    => $request->path_link_produk,
                'path_gambar_produk'   =>  $input['nama_file']

            ]);
        } else {

            DB::table('produk')->where('id_produk', $request->id_produk)->update([

                'judul_produk'        => $request->judul_produk,
                'deskripsi_produk'    => $request->deskripsi_produk,
                'path_link_produk'    => $request->path_link_produk,
    
            ]);
        }



        return redirect('admin/produk')->with(['sukses' => 'Data telah diupdate']);
    }

    // Delete
    public function delete($id_video)
    {
        if (Session()->get('username') == "") {
            return redirect('login')->with(['warning' => 'Mohon maaf, Anda belum login']);
        }
        DB::table('produk')->where('id_produk', $id_video)->delete();
        return redirect('admin/produk')->with(['sukses' => 'Data telah dihapus']);
    }
}
