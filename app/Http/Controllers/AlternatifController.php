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
        $alternatifss = Alternatif::latest()->paginate(5);

        //render view with posts
        return view('admin.perhitungan', compact('alternatifs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.alternatifs.create');
    }

    
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

    
    public function show(Alternatif $alternatif)
    {
        //
    }

    
    public function edit(Alternatif $alternatif)
    {
        $post = $alternatif;
        return view('admin.alternatifs.edit', compact('alternatif'));
    }
    
    
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
        return redirect()->route('perhitungan')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Alternatif $alternatif)
    {
        //delete post
        $alternatif->delete();
 
        //redirect to index
        return redirect()->route('perhitungan')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
