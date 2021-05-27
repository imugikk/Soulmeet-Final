<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Config;
use \App\Kelas;

class UserSubKelasController extends Controller
{
    public function index(){
        // $banners = Banner::all();
        $configs = Config::all();
        $kelas = Kelas::all();
        return view('subkelas', compact('configs', 'kelas'));
    }
}
