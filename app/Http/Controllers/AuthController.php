<?php


namespace App\Http\Controllers;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function index()
{
    return view('signup-login');
}

public function verif(Request $request)
{
    $request->validate([
        'Email' => 'required|email|exists:users,email',
        'Password' => 'required|min:6',
    ]);

    $email = $request->input('Email');
    $password = $request->input('Password');

    $user = users::where('email', $email)->first();

    if ($user && Hash::check($password, $user->password)) {
        // Password is correct, user is authenticated
        return redirect()->route('home');
    } else {
        // Incorrect email or password
        return response('Authentication failed', 401);
    }
}


//// 


public function addC(Request $request)
{
   // Validate the request data
   $request->validate([
    'Name' => 'required|string|max:255',
    'Email' => 'required|email|unique:users,email',
    'Password' => 'required|min:6',
    'CPassword' => 'required|same:Password',
]);

// Create a new user instance
DB::table('users')->insert([
    'name' => $request->input('Name'),
    'email' => $request->input('Email'),
    'email_verified_at' => now(), // assuming email verification is done immediately
    'password' => bcrypt($request->input('Password')),
    'remember_token' => Str::random(10), // generate a random token
    'created_at' => now(),
    'updated_at' => now(),
]);
return redirect()->route('home');
}

}
