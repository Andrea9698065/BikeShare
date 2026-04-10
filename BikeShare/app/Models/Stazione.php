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


    public function slots()
    {
        return $this->hasMany(Slot::class, 'id_stazione');
    }


    public function numeroSlot()
    {
        return $this->slots()->count();
    }


    public function slotLiberi()
    {
        return $this->slots()->where('stato', 'libero')->count();
    }
}
