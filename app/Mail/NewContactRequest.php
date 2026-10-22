<?php

namespace App\Mail;

use App\Models\ContactRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewContactRequest extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Solicitarea de contact primită din formular.
     */
    public ContactRequest $contactRequest;

    /**
     * Creează un nou mesaj.
     */
    public function __construct(ContactRequest $contactRequest)
    {
        $this->contactRequest = $contactRequest;
    }

    /**
     * Setările mesajului.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Solicitare nouă de proiect - DAVEA Solutions',
            replyTo: [
                $this->contactRequest->email,
            ],
        );
    }

    /**
     * Conținutul mesajului.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.contact-request',
            with: [
                'contactRequest' => $this->contactRequest,
            ],
        );
    }

    /**
     * Atașamentele mesajului.
     */
    public function attachments(): array
    {
        return [];
    }
}
