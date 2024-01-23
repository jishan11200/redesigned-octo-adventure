<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\PendingMail;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;
    public  $name, $email,$subject, $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email,$subject, $message)
    {
       
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->message = $message;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->email, $this->name, $this->message),
            subject: $this->subject,
            // message: $this->message,
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.contact_form',
           
            // with: ([
            //     'name' => $this->name,
            //     'email' => $this->email,
            //     'subject' => $this->subject,
            //     'message' => $this->message,
            // ])
            
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
