<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputanController extends Controller
{
    public function input(){
        //method untuk inputan
        return view('input');
    }

    public function proses(Request $request){
        $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'pekerjaan' => 'required',
            'usia' => 'required|numeric'
        ]);
        return view('proses',['data' => $request]);
    }
}
