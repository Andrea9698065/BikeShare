<?php

namespace App\Http\Controllers;

use App\Models\Slot;
use App\Models\Bicicletta;
use App\Models\Stazione;
use Illuminate\Http\Request;

class SlotController extends Controller
{
    public function create()
    {
        $stati      = $this->getStati();
        $biciclette = Bicicletta::all();
        $stazioni   = Stazione::all();

        return view('slot.create', compact('stati', 'biciclette', 'stazioni'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'stato'         => ['required', 'in:' . implode(',', $this->getStati())],
            'id_bicicletta' => ['nullable', 'exists:biciclette,id'],
            'id_stazione'   => ['required', 'exists:staziones,id'],
        ]);

        Slot::create([
            'stato'         => $request->stato,
            'id_bicicletta' => $request->id_bicicletta,
            'id_stazione'   => $request->id_stazione,
        ]);

        return redirect()
            ->route('slot.create')
            ->with('success', 'Slot inserito correttamente.');
    }

    private function getStati(): array
    {
        return ['libero', 'occupato', 'manutenzione'];
    }
}
