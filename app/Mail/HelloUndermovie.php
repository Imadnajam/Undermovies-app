<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class HelloUndermovie extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $logoPath = public_path('image/home/logo.png');
        $logoData = base64_encode(file_get_contents($logoPath));
        $logoSrc = 'data:image/png;base64,' . $logoData;
    
        return $this->view('emails.welcome')
                    ->with(['user' => $this->user, 'logoSrc' => $logoSrc])
                    ->subject('Welcome to Undermovies ')
                    ->attach($logoPath, [
                        'as' => 'logo.png',
                        'mime' => 'image/png',
                    ]);
    }
    
    
}


