<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $generatedPassword;

    public function __construct($user, $generatedPassword)
    {
        $this->user = $user;
        $this->generatedPassword = $generatedPassword;
    }

    public function build()
    {
        return $this->view('emails.send_password')
                    ->subject('Bienvenido, aquí está tu contraseña')
                    ->with([
                        'name' => $this->user->name,
                        'email' => $this->user->email,
                        'password' => $this->generatedPassword,
                    ]);
    }
}