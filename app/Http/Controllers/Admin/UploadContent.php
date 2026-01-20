<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadContent extends Controller
{
        //content upload
    public function main(Request $request){

        if ($request->hasFile('image')) {
            $file = $request->file('image');

            // Berikan nama unik untuk file
            $filename = time() . '.' . $file->getClientOriginalExtension();

            // Simpan ke folder 'public/uploads'
            $path = $file->storeAs('assets/pinus/img', $filename, 'public');

            // Kembalikan URL gambar agar bisa ditampilkan di editor
            return response()->json([
                'url' => asset('storage/' . $path)
            ]);
        }

        return response()->json(['error' => 'No image uploaded'], 400);
    }
}
