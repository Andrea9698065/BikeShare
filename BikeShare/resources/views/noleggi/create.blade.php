<x-form-wrapper title="Inserimento Noleggio" heading="Inserisci un nuovo noleggio">
<form action="{{ route('noleggi.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="data_inizio" class="form-label">Data inizio</label>
        <input type="date" name="data_inizio" id="data_inizio" class="form-control"
               value="{{ old('data_inizio') }}" required>
    </div>

    <div class="mb-3">
        <label for="data_fine" class="form-label">Data fine</label>
        <input type="date" name="data_fine" id="data_fine" class="form-control"
               value="{{ old('data_fine') }}" required>
    </div>

    <div class="mb-3">
        <label for="id_utente" class="form-label">Utente</label>
        <select name="id_utente" id="id_utente" class="form-select" required>
            <option value="">Seleziona un utente</option>
            @foreach($utenti as $utente)
                <option value="{{ $utente->id }}" {{ old('id_utente') == $utente->id ? 'selected' : '' }}>
                    #{{ $utente->id }} - {{ $utente->nome }} {{ $utente->cognome }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-4">
        <label for="id_bicicletta" class="form-label">Bicicletta</label>
        <select name="id_bicicletta" id="id_bicicletta" class="form-select" required>
            <option value="">Seleziona una bicicletta</option>
            @foreach($biciclette as $bicicletta)
                <option value="{{ $bicicletta->id }}" {{ old('id_bicicletta') == $bicicletta->id ? 'selected' : '' }}>
                    #{{ $bicicletta->id }} - {{ $bicicletta->modello }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="alert alert-info mb-4">
        Il costo verrà calcolato automaticamente a €5,00 al giorno.
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-primary btn-lg rounded-3">
            Salva noleggio
        </button>
    </div>
</form>
</x-form-wrapper>
