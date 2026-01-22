<?php

namespace App\Services;

use App\Mail\EnviarCorreo;
use App\Models\FormEmail;

class FormEmailService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        
    }

    public function sendEmail(array $data)
    {
        $form= FormEmail::create($data); 

        $correo = new EnviarCorreo();
    }
}
