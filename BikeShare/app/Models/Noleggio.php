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

    protected $casts = [
        'data_inizio' => 'datetime',
        'data_fine' => 'datetime',
        'costo' => 'decimal:2',
    ];


    public function utente()
    {
        return $this->belongsTo(Utente::class, 'id_utente');
    }

    /**
     * Un noleggio appartiene a una bicicletta
     */
    public function bicicletta()
    {
        return $this->belongsTo(Bicicletta::class, 'id_bicicletta');
    }

    /**
     * Verifica se il noleggio è ancora attivo
     */
    public function isAttivo()
    {
        return is_null($this->data_fine);
    }

    /**
     * Calcola la durata del noleggio in ore
     */
    public function durataOre()
    {
        if ($this->data_fine) {
            return $this->data_inizio->diffInHours($this->data_fine);
        }
        return $this->data_inizio->diffInHours(now());
    }
}
