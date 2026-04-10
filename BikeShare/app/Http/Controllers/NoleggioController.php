<?php

namespace App\Http\Controllers;

use App\Models\Noleggio;
use App\Models\Utente;
use App\Models\Bicicletta;
use Illuminate\Http\Request;
use Carbon\Carbon;

class NoleggioController extends Controller
{
    private const COSTO_GIORNALIERO = 5.00;

    public function create()
    {
        $utenti     = Utente::all();
        $biciclette = Bicicletta::all();

        return view('noleggi.create', compact('utenti', 'biciclette'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'data_inizio'   => ['required', 'date'],
            'data_fine'     => ['required', 'date', 'after_or_equal:data_inizio'],
            'id_utente'     => ['required', 'exists:utentes,id'],
            'id_bicicletta' => ['required', 'exists:biciclette,id'],
        ]);

        $inizio = Carbon::parse($request->data_inizio);
        $fine   = Carbon::parse($request->data_fine);
        $giorni = max(1, $inizio->diffInDays($fine));
        $costo  = $giorni * self::COSTO_GIORNALIERO;

        Noleggio::create([
            'data_inizio'   => $request->data_inizio,
            'data_fine'     => $request->data_fine,
            'costo'         => $costo,
            'id_utente'     => $request->id_utente,
            'id_bicicletta' => $request->id_bicicletta,
        ]);

        return redirect()
            ->route('noleggi.create')
            ->with('success', "Noleggio inserito correttamente. Costo calcolato: €{$costo}.");
    }
}
