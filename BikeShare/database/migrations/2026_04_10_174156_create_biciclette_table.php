<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('biciclette', function (Blueprint $table) {
            $table->id();
            $table->string('modello',64);
            $table->year('anno_di_produzione');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('biciclette');
    }
};
