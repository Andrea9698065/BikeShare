<?php

namespace App\Http\Controllers;

use App\Models\Utente;
use Illuminate\Http\Request;

class UtenteController extends Controller
{
    public function create()
    {
        return view('utenti.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome'                 => ['required', 'string', 'max:100'],
            'cognome'              => ['required', 'string', 'max:100'],
            'cap'                  => ['required', 'digits:5'],
            'indirizzo'            => ['required', 'string', 'max:255'],
            'num_carta_di_credito' => ['required', 'digits:16'],
            'cellulare'            => ['required', 'string', 'max:15'],
            'mail'                 => ['required', 'email', 'max:255'],
            'data_nascita'         => ['required', 'date', 'before:today'],
        ]);

        Utente::create([
            'nome'                 => $request->nome,
            'cognome'              => $request->cognome,
            'cap'                  => $request->cap,
            'indirizzo'            => $request->indirizzo,
            'num_carta_di_credito' => $request->num_carta_di_credito,
            'cellulare'            => $request->cellulare,
            'mail'                 => $request->mail,
            'data_nascita'         => $request->data_nascita,
        ]);

        return redirect()
            ->route('utenti.create')
            ->with('success', 'Utente inserito correttamente.');
    }
}
