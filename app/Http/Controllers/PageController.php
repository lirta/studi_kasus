<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('conten');
    }
    public function siswa(){
        return view('admin.siswa');
    }
    public function guru(){
        return view('admin.guru');
    }
    public function mapel(){
        return view('admin.matapelajaran');
    }
    public function jadwal_mapel(){
        return view('admin.jadwal_pelajaran');
    }
}
