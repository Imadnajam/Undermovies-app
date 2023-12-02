<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function detail()
{
    return view('components.detailmovie');
}
}
