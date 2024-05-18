<?php

namespace App\Http\Controllers;

use App\Models\penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penulis = Penulis::all();
        return view('penulis.index', compact('penulis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penulis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penulis = new penulis;
        $penulis->nama_penulis = $request->nama_penulis;
        $penulis->jenis_kelamin = $request->jenis_kelamin;

        $penulis->save();
        return redirect()->route('penulis.index')->with('success', 'Data berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penulis = Penulis::findOrFail($id);
        return view('penulis.show', compact('penulis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penulis = Penulis::findOrFail($id);
        return view('penulis.edit', compact('penulis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $penulis = Penulis::findOrFail($id);
        $penulis->name_penulis = $request->name_penulis;
        $penulis->jenis_kelamin = $request->jenis_kelamin;
        $penulis->save();
        return redirect()->route('penulis.index')->with('success', 'Data berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penulis  $penulis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penulis = Penulis::FindOrFail($id);
        $penulis->delete();
        return redirect()->route('penulis.index')->with('success', 'Data berhasil Dihapus');
    }
}
