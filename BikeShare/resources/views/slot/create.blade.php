@extends('layouts.app')

@section('title', 'Inserimento Slot')

@section('contenuto')

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">

            <div class="card shadow rounded-4 border-0">
                <div class="card-body p-4">
                    <h1 class="text-center mb-4">Inserisci un nuovo slot</h1>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $errore)
                                    <li>{{ $errore }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('slot.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="stato" class="form-label">Stato dello slot</label>
                            <select name="stato" id="stato" class="form-select" required>
                                <option value="">Seleziona uno stato</option>
                                @foreach($stati as $stato)
                                    <option value="{{ $stato }}" {{ old('stato') == $stato ? 'selected' : '' }}>
                                        {{ ucfirst($stato) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="id_bicicletta" class="form-label">Bicicletta (opzionale)</label>
                            <select name="id_bicicletta" id="id_bicicletta" class="form-select">
                                <option value="">Nessuna bicicletta</option>
                                @foreach($biciclette as $bicicletta)
                                    <option value="{{ $bicicletta->id }}" {{ old('id_bicicletta') == $bicicletta->id ? 'selected' : '' }}>
                                        #{{ $bicicletta->id }} - {{ $bicicletta->modello }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="id_stazione" class="form-label">Stazione</label>
                            <select name="id_stazione" id="id_stazione" class="form-select" required>
                                <option value="">Seleziona una stazione</option>
                                @foreach($stazioni as $stazione)
                                    <option value="{{ $stazione->id }}" {{ old('id_stazione') == $stazione->id ? 'selected' : '' }}>
                                        #{{ $stazione->id }} - {{ $stazione->indirizzo }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg rounded-3">
                                Salva slot
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="text-center mt-3 text-muted">
                Gestione slot BikeShare
            </div>

        </div>
    </div>

@endsection
