<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Mail\HelloUndermovie;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function index()
    {
        return view('layout.signup-login');
    }

    public function verif(Request $request)
    {
        $request->validate([
            'Email' => 'required|email|exists:users,email',
            'Password' => 'required|min:6',
        ]);

        $email = $request->input('Email');
        $password = $request->input('Password');

        if ($email == 'admin@gmail.com' && $password == 'admiN2024@') {
            return redirect()->route('admin.index');
        }

        $user = users::where('email', $email)->first();

        if ($user && Hash::check($password, $user->password)) {
            return redirect()->route('home');
        } else {
            return redirect()->back()->with('error', 'Incorrect email or password');
        }
    }

    public function addC(Request $request)
    {
        $request->validate([
            'Name' => 'required|string|max:255',
            'Email' => 'required|email|unique:users,email',
            'Password' => 'required|min:6',
            'CPassword' => 'required|same:Password',
        ]);

        $user = new users;
        $user->name = $request->input('Name');
        $user->email = $request->input('Email');
        $user->email_verified_at = now();
        $user->password = bcrypt($request->input('Password'));
        $user->remember_token = Str::random(10);
        $user->created_at = now();
        $user->updated_at = now();

        try {
            $user->save();
            Mail::to($request->input('Email'))->send(new HelloUndermovie($user));
            return redirect()->route('home')->with('success', 'Registration successful. Please check your email for verification.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred during registration. Please try again.');
        }
    }
}
