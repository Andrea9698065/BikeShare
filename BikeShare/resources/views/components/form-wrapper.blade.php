@extends('layouts.app')

@section('title', $title)

@section('contenuto')

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">

            <div class="card shadow rounded-4 border-0">
                <div class="card-body p-4">
                    <h1 class="text-center mb-4">{{ $heading }}</h1>

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


                    {{ $slot }}

                </div>
            </div>

            <div class="text-center mt-3 text-muted">
                Gestione BikeShare
            </div>

        </div>
    </div>

@endsection
