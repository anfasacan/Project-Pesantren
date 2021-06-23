<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('beranda');
    }
    public function berita()
    {
        return view('berita');
    }
    public function agenda()
    {
        return view('agenda');
    }
    public function guru()
    {
        return view('guru');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function tentang()
    {
        return view('tentang');
    }
    public function login()
    {
        return view('admin.login_admin');
    }
    
}
