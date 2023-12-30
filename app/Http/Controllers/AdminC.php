<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminC extends Controller
{
    public function start(){
        return view('admin.index');
    }
}
