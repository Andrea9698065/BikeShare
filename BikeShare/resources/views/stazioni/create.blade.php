<x-form-wrapper title="Inserimento Slot" heading="Inserisci un nuovo slot">
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
</x-form-wrapper>
