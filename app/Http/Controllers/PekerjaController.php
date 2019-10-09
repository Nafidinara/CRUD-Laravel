<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PekerjaController extends Controller
{
    public function index(){
        //mengambil data dari tabel pegawai
        $pegawai = DB::table('pegawai')->get();

        //menampilkan data ke view index
        return view('index',['pegawai' => $pegawai]);
    }

    public function tambah(){
        //method insert
        return view('tambah');
    }

    public function store(Request $request){
        //method untuk mengolah data agar di insert ke db
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        //link page ke pekerja
        return redirect('/pekerja');
    }

    public function edit($id){
        //mengambil data dari db
        $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
        //passing data ke view edit
        return view('edit',['pegawai' => $pegawai]);
    }

    public function update(Request $request){
        //method update data
        DB::table('pegawai')->where('pegawai_id',$request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        //direct ke page pekerja
        return redirect('/pekerja');
    }

    public function hapus($id){
        //method delete data dari db
        DB::table('pegawai')->where('pegawai_id',$id)->delete();
        //direct ke page pekerja
        return redirect('/pekerja');
    }
}