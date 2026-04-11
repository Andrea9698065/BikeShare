<x-form-wrapper title="Inserimento Slot" heading="Inserisci un nuovo Utente">
<form action="{{ route('utenti.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control"
               value="{{ old('nome') }}" required>
    </div>

    <div class="mb-3">
        <label for="cognome" class="form-label">Cognome</label>
        <input type="text" name="cognome" id="cognome" class="form-control"
               value="{{ old('cognome') }}" required>
    </div>

    <div class="mb-3">
        <label for="cap" class="form-label">CAP</label>
        <input type="text" name="cap" id="cap" class="form-control"
               value="{{ old('cap') }}" required>
    </div>

    <div class="mb-3">
        <label for="indirizzo" class="form-label">Indirizzo</label>
        <input type="text" name="indirizzo" id="indirizzo" class="form-control"
               value="{{ old('indirizzo') }}" required>
    </div>

    <div class="mb-3">
        <label for="num_carta_di_credito" class="form-label">Numero carta di credito</label>
        <input type="text" name="num_carta_di_credito" id="num_carta_di_credito" class="form-control"
               value="{{ old('num_carta_di_credito') }}" required>
    </div>

    <div class="mb-3">
        <label for="cellulare" class="form-label">Cellulare</label>
        <input type="text" name="cellulare" id="cellulare" class="form-control"
               value="{{ old('cellulare') }}" required>
    </div>

    <div class="mb-3">
        <label for="mail" class="form-label">Email</label>
        <input type="email" name="mail" id="mail" class="form-control"
               value="{{ old('mail') }}" required>
    </div>

    <div class="mb-4">
        <label for="data_nascita" class="form-label">Data di nascita</label>
        <input type="date" name="data_nascita" id="data_nascita" class="form-control"
               value="{{ old('data_nascita') }}" required>
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-primary btn-lg rounded-3">
            Salva utente
        </button>
    </div>
</form>
</x-form-wrapper>
