<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RefRole;

class RoleController extends Controller
{
    public function index() {
        $data = RefRole::all();

        return view('role/role', get_defined_vars());
   }
}
