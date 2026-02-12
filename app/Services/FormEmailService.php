<?php

namespace App\Services;

use App\Mail\EnviarCorreo;
use App\Models\FormEmail;
use Illuminate\Support\Facades\Mail;

class FormEmailService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        
    }

    public function sendEmail(string $email)
    {
        Mail::to($email)->send(new EnviarCorreo(FormEmail::first()));
    }
}
