<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Bicicletta extends Model
{
    

 
    protected $table = 'biciclette';

    protected $fillable = [
        'modello',
        'anno_di_produzione'
    ];

    public $timestamps = true;//Se vuoi i timestamp fatti da laravel cambia questa in true
    //Se invece la metti false [Come originale] Non lo fa
}
