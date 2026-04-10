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
        Schema::create('utenti', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cognome');
            $table->string('cap', 10);
            $table->string('indirizzo');
            $table->string('num_carta_di_credito');
            $table->string('cellulare');
            $table->string('mail');
            $table->date('data_nascita');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utenti');
    }
};
