<?php

namespace App\Http\Controllers;

use App\Models\Bicicletta;
use Illuminate\Http\Request;

class BiciclettaController extends Controller
{
    public function test()//per commikt
    {
        $modelli = $this->getModelli();
        $anni = $this->getAnni();

        return view('biciclette.create', compact('modelli', 'anni'));
    }

    public function create()
    {
        $modelli = $this->getModelli();
        $anni = $this->getAnni();

        return view('biciclette.create', compact('modelli', 'anni'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'modello' => ['required', 'in:' . implode(',', $this->getModelli())],
            'anno_di_produzione' => ['required', 'integer', 'in:' . implode(',', $this->getAnni())],
        ]);

        Bicicletta::create([
            'modello' => $request->modello,
            'anno_di_produzione' => $request->anno_di_produzione,
        ]);

        return redirect()
            ->route('biciclette.create')
            ->with('success', 'Bicicletta inserita correttamente.');
    }

    private function getModelli(): array
    {
        return [
            'SportMix E-Flow',
            'UrbanPulse X1',
            'VoltWay City',
            'GreenBolt S',
            'AeroRide Neo'
        ];
    }

    private function getAnni(): array
    {
        $annoCorrente = date('Y');
        return range($annoCorrente, $annoCorrente - 5);
    }
}

