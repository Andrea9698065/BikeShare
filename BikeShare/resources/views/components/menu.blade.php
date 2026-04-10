<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">BikeShare</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('utenti.create') }}">Inserisci Utente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('stazioni.create') }}">Inserisci Stazione</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('biciclette.create') }}">Inserisci Bicicletta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('slot.create') }}">Inserisci Slot</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('noleggi.create') }}">Inserisci Noleggio</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
