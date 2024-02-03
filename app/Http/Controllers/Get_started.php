<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\getStarted;
class Get_started extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validate the input, including the email address
        $request->validate([
            'email' => 'required|email',
        ]);

        // Send the email
        Mail::to($request->input('email'))->send(new getStarted());

        // Redirect back with a success message
        return redirect()->back()->with('status', 'Email sent successfully!');
    }
}
