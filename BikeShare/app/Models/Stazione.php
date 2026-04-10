<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stazione extends Model
{
    protected $table = 'stazioni';
    protected $fillable = [
        'indirizzo',
        'cap',
    ];
}
