<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class seriesDetaileController extends Controller
{
    public function detail($id){
  return view('components.seriesDetaile');
    }
}
