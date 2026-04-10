<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utente extends Model
{
    protected $table = 'utenti';
    protected $fillable = [
        'nome',
        'cognome',
        'cap',
        'indirizzo',
        'num_carta_di_credito',
        'cellulare',
        'mail',
        'data_nascita',
    ];
}
