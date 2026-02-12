<?php

namespace App\Services;

use App\Models\FormEmail;

class FormService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        
    }

    public function store(array $data)
    {
        // Lógica para almacenar los datos del formulario
        return FormEmail::create($data);
    }
}
