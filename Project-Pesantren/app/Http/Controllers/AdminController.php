<?php

namespace App\Http\Controllers;

use App\Bobot;
use App\Data;
use App\Dashboard;
use App\Guru;
use App\Artikel;
use App\Agenda;
use App\Galeri;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashboard()
    {
        // $murid = Dashboard::
        $dashboard = Dashboard::where('id','LIKE','%1%')->get()->first();
        $murid = $dashboard->murid;
        $guru = $dashboard->guru;
        $pelajaran = $dashboard->pelajaran;
        $prestasi = $dashboard->prestasi;
        return view ('admin.A_dashboard',compact('dashboard'));
        // dd ($murid_take->guru);
    }

    public function artikel()
    {
        $artikel = Artikel::all();
        return view ('admin.A_artikel',compact('artikel'));
    }

    public function agenda()
    {
        $agenda = Agenda::all();
        return view ('admin.A_agenda',compact('agenda'));
    }

    public function galeri()
    {
        $galeri = Galeri::all();
        return view ('admin.A_galeri',compact('galeri'));
    }

    public function guru()
    {
        $guru = Guru::all();
        return view ('admin.A_guru',compact('guru'));
    }

    public function data()
    {
        // $data = Data::all();
        // return view ('admin.A_data',compact('data'));
    }

    public function login()
    {
        return view ('admin.login_admin');
    }

    // public function edit_data(data $data)
    // {
    //     // return $data;
    //     // $data = Data::all();
    //     // dd($data);
    //     return view ('admin.A_edit_data',compact('data'));
    // }

    public function tambah_data()
    {
        return view ('admin.A_tambah_data');
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
