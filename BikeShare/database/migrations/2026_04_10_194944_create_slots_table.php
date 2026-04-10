<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('slots', function (Blueprint $table) {
            $table->id();
            $table->string('stato'); // es: 'libero', 'occupato'

            // Foreign keys
            $table->foreignId('id_bicicletta')
                ->nullable() // può essere vuoto se lo slot è libero
                ->constrained('biciclette')
                ->onDelete('set null');

            $table->foreignId('id_stazione')
                ->constrained('stazioni')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('slots');
    }
};
