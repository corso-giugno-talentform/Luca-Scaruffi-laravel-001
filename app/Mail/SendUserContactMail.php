<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendUserContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // Renderà i dati del form disponibili nel template email

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Grazie per il tuo messaggio - Il Mio Portfolio',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.user_contact_mail', // Specifica il template Blade per questa email
            with: [
                'userName' => $this->data['nome'],
                'userEmail' => $this->data['email'],
                'userSubject' => $this->data['oggetto'],
                'userMessage' => $this->data['messaggio'],
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
