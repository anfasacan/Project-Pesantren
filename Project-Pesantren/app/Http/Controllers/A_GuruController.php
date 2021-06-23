<?php

namespace App\Http\Controllers;

use App\Guru;
use Illuminate\Http\Request;

class A_GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function edit_guru(Guru $guru)
    {
        return view ('admin.edit.A_edit_guru',compact('guru'));
    }

    public function update_guru(request $request,guru $guru)
    {
        Guru::where('id',$guru->id)
        ->update([
            'id' => $request -> id,
            'nama' => $request -> nama,
            'foto' => $request -> foto,
            'jabatan' => $request -> jabatan
            ]);
        
        if($request -> hasFile('foto')){
            $request->file('foto') -> move('img/poto/guru/',$request->file('foto')->getClientOriginalName());
            $guru -> foto = $request -> file('foto')-> getClientOriginalName();
            $guru -> save();
        }

        return redirect('/admin_guru')->with('status','Data berhasil diedit');
    }

    public function tambah_guru()
    {
        return view ('admin.add.A_tambah_guru');
    }

    public function tambahkan_guru(Request $request)
    {
        $guru = new Guru();
        $guru -> id = $request->id;
        $guru -> nama = $request->nama;
        $guru -> foto= $request->foto;
        $guru -> jabatan = $request->jabatan;
        

        if($request -> hasFile('foto')){
            $request->file('foto') -> move('img/poto/guru/',$request->file('foto')->getClientOriginalName());
            $guru -> foto = $request -> file('foto')-> getClientOriginalName();
        }

        $guru->save();
        return redirect('/admin_guru')->with('status','data berhasil ditambahkan');
    }

    public function hapus_guru(Guru $guru)
    {
        Guru::destroy($guru -> id);
        return redirect('/admin_guru')->with ('status','Data Isi Berita Berhasil Dihapus');
    }

    public function index()
    {
        //
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
