<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Config;
use \App\Kelas;

class UserKelasController extends Controller
{
    public function index(){
        // $banners = Banner::all();
        $logo = Config::all();
        $kelas = Kelas::all();
        return view('kelas', compact('logo', 'kelas'));
    }
}
