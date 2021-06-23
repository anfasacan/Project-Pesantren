<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class A_ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

     public function edit_artikel(Artikel $artikel)
    {
        return view ('admin.edit.A_edit_artikel',compact('artikel'));
    }

    public function update_artikel(request $request,artikel $artikel)
    {
        Artikel::where('id',$artikel->id)
        ->update([
            'id' => $request -> id,
            'gambar' => $request -> gambar,
            'judul' => $request -> judul,
            'isi' => $request -> isi,
            'tanggal' => $request -> tanggal
            ]);
        
        if($request -> hasFile('gambar')){
            $request->file('gambar') -> move('img/poto/artikel/',$request->file('gambar')->getClientOriginalName());
            $artikel -> gambar = $request -> file('gambar')-> getClientOriginalName();
            $artikel -> save();
        }

        return redirect('/admin_artikel')->with('status','Data berhasil diedit');
    }

    public function tambah_artikel()
    {
        return view ('admin.add.A_tambah_artikel');
    }

    public function tambahkan_artikel(Request $request)
    {
        $artikel = new Artikel();
        $artikel -> id = $request->id;
        $artikel -> gambar= $request->gambar;
        $artikel -> judul = $request->judul;
        $artikel -> isi = $request->isi;
        $artikel -> tanggal = $request->tanggal;
        

        if($request -> hasFile('gambar')){
            $request->file('gambar') -> move('img/poto/artikel/',$request->file('gambar')->getClientOriginalName());
            $artikel -> gambar = $request -> file('gambar')-> getClientOriginalName();
        }

        $artikel->save();
        return redirect('/admin_artikel')->with('status','data berhasil ditambahkan');
    }

    public function hapus_artikel(Artikel $artikel)
    {
        Artikel::destroy($artikel -> id);
        return redirect('/admin_artikel')->with ('status','Data Isi Berita Berhasil Dihapus');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
