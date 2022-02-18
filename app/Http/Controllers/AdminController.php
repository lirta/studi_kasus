<?php

namespace App\Http\Controllers;

use App\Models\Guru;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add_guru(Request $request){
        $simpan= new Guru();
        $simpan->nip        =$request->nip;
        $simpan->nama_guru  =$request->nama;
        $simpan->alamat_guru     =$request->alamat;
        $simpan->password   = bcrypt($request->pass);
        $simpan->save();
        return redirect()->route('/guru')->with('Berhasil Simpan Data', 'Input Data Berhasil');
    }
}
