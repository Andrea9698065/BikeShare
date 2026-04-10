@extends('layouts.app')

@section('title', 'Inserimento Bicicletta')

@section('contenuto')

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">

            <div class="card shadow rounded-4 border-0">
                <div class="card-body p-4">
                    <h1 class="text-center mb-4">Inserisci una nuova bicicletta</h1>

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

                    <form action="{{ route('biciclette.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="modello" class="form-label">Modello della bicicletta</label>
                            <select name="modello" id="modello" class="form-select" required>
                                <option value="">Seleziona un modello</option>
                                @foreach($modelli as $modello)
                                    <option value="{{ $modello }}" {{ old('modello') == $modello ? 'selected' : '' }}>
                                        {{ $modello }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="anno_di_produzione" class="form-label">Anno di produzione</label>
                            <select name="anno_di_produzione" id="anno_di_produzione" class="form-select" required>
                                <option value="">Seleziona un anno</option>
                                @foreach($anni as $anno)
                                    <option value="{{ $anno }}" {{ old('anno_di_produzione') == $anno ? 'selected' : '' }}>
                                        {{ $anno }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg rounded-3">
                                Salva bicicletta
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="text-center mt-3 text-muted">
                Gestione biciclette elettriche BikeShare
            </div>

        </div>
    </div>

@endsection
