<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('noleggi', function (Blueprint $table) {
            $table->id();
            $table->dateTime('data_inizio');
            $table->dateTime('data_fine')->nullable(); // nullable se il noleggio è in corso
            $table->decimal('costo', 8, 2)->nullable(); // es: 999999.99

            // Foreign keys
            $table->foreignId('id_utente')
                ->constrained('utenti')
                ->onDelete('cascade');

            $table->foreignId('id_bicicletta')
                ->constrained('biciclette')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('noleggi');
    }
};
