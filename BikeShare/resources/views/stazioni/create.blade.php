@extends('layouts.app')

@section('title', 'Inserimento Stazione')

@section('contenuto')

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">

            <div class="card shadow rounded-4 border-0">
                <div class="card-body p-4">
                    <h1 class="text-center mb-4">Inserisci una nuova stazione</h1>

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

                    <form action="{{ route('stazioni.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="indirizzo" class="form-label">Indirizzo</label>
                            <input type="text" name="indirizzo" id="indirizzo" class="form-control"
                                   value="{{ old('indirizzo') }}" required>
                        </div>

                        <div class="mb-4">
                            <label for="cap" class="form-label">CAP</label>
                            <input type="text" name="cap" id="cap" class="form-control"
                                   value="{{ old('cap') }}" required>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg rounded-3">
                                Salva stazione
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="text-center mt-3 text-muted">
                Gestione stazioni BikeShare
            </div>

        </div>
    </div>

@endsection
