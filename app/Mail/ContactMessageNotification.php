<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\ContactMessage; // Import model Anda

class ContactMessageNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Instance pesan kontak.
     *
     * @var \App\Models\ContactMessage
     */
    public $contactMessage;

    /**
     * Create a new message instance.
     *
     * @param \App\Models\ContactMessage $contactMessage
     * @return void
     */
    public function __construct(ContactMessage $contactMessage)
    {
        $this->contactMessage = $contactMessage;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Pesan Baru dari Formulir Kontak: ' . $this->contactMessage->subject,
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        // Menunjuk ke view email yang akan kita buat
        return new Content(
            view: 'emails.contact-notification',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
