<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class HelloUndermovie extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(
        public readonly object $user
    ) {}

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Welcome to Undermovies',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.welcome',
            with: [
                'user' => $this->user,
                'logoSrc' => $this->getEmbeddedLogo(),
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        $logoPath = public_path('image/home/logo.png');

        return [
            Attachment::fromPath($logoPath)
                ->as('logo.png')
                ->withMime('image/png'),
        ];
    }

    /**
     * Get the base64 encoded logo for inline embedding.
     */
    private function getEmbeddedLogo(): string
    {
        $logoPath = public_path('image/home/logo.png');
        $logoData = base64_encode(file_get_contents($logoPath));

        return 'data:image/png;base64,' . $logoData;
    }
}
