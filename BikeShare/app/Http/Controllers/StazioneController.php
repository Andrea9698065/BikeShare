<?php

namespace App\Http\Controllers;

use App\Models\Stazione;
use Illuminate\Http\Request;

class StazioneController extends Controller
{
    public function create()
    {
        return view('stazioni.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'indirizzo' => ['required', 'string', 'max:255'],
            'cap'       => ['required', 'digits:5'],
        ]);

        Stazione::create([
            'indirizzo' => $request->indirizzo,
            'cap'       => $request->cap,
        ]);

        return redirect()
            ->route('stazioni.create')
            ->with('success', 'Stazione inserita correttamente.');
    }
}
