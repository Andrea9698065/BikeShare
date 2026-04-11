<x-form-wrapper title="Inserimento Slot" heading="Inserisci un nuovo slot">
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
</x-form-wrapper>
