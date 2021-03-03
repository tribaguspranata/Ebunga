<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrasiMail extends Mailable
{
    use Queueable, SerializesModels;
    public $dr;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dr)
    {
        $this -> dr = $dr;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this -> dr['email'];
        $token_aktivasi = $this -> dr['token_aktivasi'];
        $dr = ['email' => $email, 'website' => 'ebunga.co.id', 'token_aktivasi' => $token_aktivasi];
        return $this -> from('master@ebunga.co.id', 'Ebunga.co.id') -> view('layout_email.notif_new_registrasi') -> subject("Ebunga Registration") -> with($dr);
    }

}
