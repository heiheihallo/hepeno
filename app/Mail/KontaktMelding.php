<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class KontaktMelding extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $fornavn,
        public string $etternavn,
        public string $bedrift,
        public string $epost,
        public string $mobil,
        public string $melding,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "Ny henvendelse fra {$this->fornavn} {$this->etternavn}",
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'mail.kontakt',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
