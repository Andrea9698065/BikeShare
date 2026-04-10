<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noleggio extends Model
{
    protected $table = 'noleggi';
    protected $fillable = [
        'data_inizio',
        'data_fine',
        'costo',
        'id_utente',
        'id_bicicletta',
    ];
}
