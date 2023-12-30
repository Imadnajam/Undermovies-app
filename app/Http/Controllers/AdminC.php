<?php

namespace App\Http\Controllers;
use App\Models\users;
use Illuminate\Http\Request;

class AdminC extends Controller
{
    public function start(){
        $clients = users::where('name', '!=', 'admin')
        ->where('email', '!=', 'admin@gmail.com')
        ->get();
        $clientsCount = users::where('name', '!=', 'admin')
        ->where('email', '!=', 'admin@gmail.com')
        ->count();
    
        
        return view('admin.index',['clients'=>$clients ,'clientsCount'=>$clientsCount]);
    }
}
