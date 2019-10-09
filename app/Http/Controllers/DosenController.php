<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        return "hallo nama saya alfara";
    }

    
    public function biodata(){
        //passing controller ke route lewat view
        $nama = "Alfara Nafi Dinara";
        //passing data array
        $pelajaran = ["Matematika","IPA","Pemrograman","Bindonesia"];
        return view('biodata', ['nama' => $nama , 'mapel' => $pelajaran]);
        //passing view ke route lewat controller
        // return view('biodata');
    }
}
