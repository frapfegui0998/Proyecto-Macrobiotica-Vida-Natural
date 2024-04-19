<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class EnviarCorreo extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre, $apellido, $mensaje, $motivo;

    /**
     * Create a new message instance.
     *
     * @param string $mensaje
     * @return void
     */
    public function __construct($nombre, $apellido, $mensaje, $motivo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->mensaje = $mensaje;
        $this->motivo = $motivo;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->motivo,
        );
    }
    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'email_to_admin',
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
