<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
         
         $filePath = storage_path('app/home.json');
         $jsonContent = file_get_contents($filePath);
         $films = json_decode($jsonContent, true);

         /////////////////////////////////////
         $filePath = storage_path('app/home1.json');
         $jsonContent = file_get_contents($filePath);
         $tvs = json_decode($jsonContent, true);
         ///////////////////////////////////////
         $filePath = storage_path('app/home2.json');
         $jsonContent = file_get_contents($filePath);
         $tops = json_decode($jsonContent, true);

         // Return the JSON data
         return view('index',['films'=>$films,'tvs'=>$tvs,'tops'=>$tops]);
       
    }
}
