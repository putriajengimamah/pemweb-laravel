<?php

namespace App\Http\Controllers;

use App\Models\Mendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MendaftarController extends Controller
{
    public function index()
    {
        //get inputs
        $mendaftars = Mendaftar::latest()->paginate(5);

        //render view with posts
        return view('admin.mendaftars.index', compact('mendaftars'));
    }

    public function create()
    {
        return view('admin.mendaftars.create');
    }

    public function store(Request $request)
    {
        //Validate form
        $this->validate($request, [
            'nama'       => 'required|min:5',
            'gambar'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'deskripsi'  => 'required|min:10',
            'harga'      => 'required|min:9'
        ]);

        //Upload Image
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/mendaftars', $gambar->hashName());

        //Create post
        Mendaftar::create([
            'nama'       => $request->nama,
            'gambar'     => $gambar->hashName(),
            'deskripsi'  => $request->deskripsi,
            'harga'      => $request->harga
        ]);

        //redirect to index
        return redirect()->route('mendaftars.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(Mendaftar $mendaftar)
    {
        return view('admin.mendaftars.edit', compact('mendaftar'));
    }

    public function update(Request $request, Mendaftar $mendaftar)
    {
        //Validate form
        $this->validate($request, [
            'nama'       => 'required|min:5',
            'gambar'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            'deskripsi'  => 'required|min:10',
            'harga'      => 'required|min:9'
        ]);

        //check if image is uploaded
        if ($request->hasFile('gambar')) {

            //upload new image
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/mendaftars', $gambar->hashName());

            //delete old image
            Storage::delete('public/mendaftars/'.$mendaftar->gambar);

            //update post with new image
            $mendaftar->update([
                'nama'       => $request->nama,
                'gambar'     => $gambar->hashName(),
                'deskripsi'  => $request->deskripsi,
                'harga'      => $request->harga
            ]);
        } else {
            //update post without image
            $mendaftar->update([
                'nama'       => $request->nama,
                'deskripsi'  => $request->deskripsi,
                'harga'      => $request->harga
            ]);
        }

        //redirect to index
        return redirect()->route('mendaftars.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Mendaftar $mendaftar)
    {
         //delete image
         Storage::delete('public/mendaftars/'. $mendaftar->gambar);

         //delete post
         $mendaftar->delete();
 
         //redirect to index
         return redirect()->route('mendaftars.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
