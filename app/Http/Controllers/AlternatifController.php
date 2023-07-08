<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use App\Http\Requests\StoreAlternatifRequest;
use App\Http\Requests\UpdateAlternatifRequest;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get inputs
        $posts = Alternatif::latest()->paginate(5);

        //render view with posts
        return view('admin.perhitungan', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAlternatifRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlternatifRequest $request)
    {
        //Validate form
        $this->validate($request, [
            'nama'          => 'required|min:5',
            'deskripsi'     => 'required|min:10',
            'komposisi'     => 'required',
            'kemasan'       => 'required',
            'harga'         => 'required',
            'brand'         => 'required',
            'kesesuaian'    => 'required'
        ]);


        //Create post
        Alternatif::create([
            'nama'          => $request->nama,
            'deskripsi'     => $request->deskripsi,
            'komposisi'     => $request->komposisi,
            'kemasan'       => $request->kemasan,
            'harga'         => $request->harga,
            'brand'         => $request->brand,
            'kesesuaian'    => $request->kesesuaian
        ]);

        //redirect to index
        return redirect()->route('perhitungan')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function show(Alternatif $alternatif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function edit(Alternatif $alternatif)
    {
        $post = $alternatif;
        return view('admin.posts.edit', compact('post'));
    }

    public function editalt($id)
    {
        $post = Alternatif::find($id);
        return view('admin.posts.edit', compact('post'));
    }

    public function updatealt($id, Request $request)
    {
        $validateData = $request->validate([
            'nama'          => 'required|min:5',
            'deskripsi'     => 'required|min:10',
            'komposisi'     => 'required',
            'kemasan'       => 'required',
            'harga'         => 'required',
            'brand'         => 'required',
            'kesesuaian'    => 'required'
        ]);
        $post = Alternatif::find($id);
        $post->update($validateData);
        return redirect('perhitungan');

    }

    public function hapusalt($id) {
        $post = Alternatif::find($id);
        $post->delete();

        return redirect('perhitungan');
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAlternatifRequest  $request
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alternatif $alternatif)
    {
        //Validate form
        $this->validate($request, [
            'nama'          => 'required|min:5',
            'deskripsi'     => 'required|min:10',
            'komposisi'     => 'required',
            'kemasan'       => 'required',
            'harga'         => 'required',
            'brand'         => 'required',
            'kesesuaian'    => 'required'
        ]);

        $alternatif->update([
            'nama'          => $request->nama,
            'deskripsi'     => $request->deskripsi,
            'komposisi'     => $request->komposisi,
            'kemasan'       => $request->kemasan,
            'harga'         => $request->harga,
            'brand'         => $request->brand,
            'kesesuaian'    => $request->kesesuaian
        ]);

        //redirect to index
        return redirect()->route('admin.perhitungan')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alternatif $alternatif)
    {
        //delete post
        $alternatif->delete();
 
        //redirect to index
        return redirect()->route('perhitungan')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
