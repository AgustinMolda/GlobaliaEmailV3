<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('form_emails', function (Blueprint $table) {
            $table->id();
            $table->string('nombreCompleto');
            $table->string('nombreEmpresa');
            $table->string('numeroWhatsapp');
            $table->string('email');
            $table->string('tipoServicio');
            $table->text('motivoContacto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_emails');
    }
};
