<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Form per cancellare l'account -->
                <form method="POST" action="{{ route('profile.delete') }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Cancella account</button>
                </form>
            </div>
        </div>
    
        <div class="row">
            @forelse ($announcements as $announcement)
                <div class="col-12 col-md-6 col-lg-4 my-2">
                    <!-- Card per ogni annuncio -->
                    <div class="card">
                        <!-- Immagine dell'annuncio (utilizza una dimensione fissa per migliorare le prestazioni del caricamento della pagina) -->
                        <img src="https://picsum.photos/200/300" class="card-img-top" alt="Placeholder">
                        <div class="card-body">
                            <!-- Titolo dell'annuncio -->
                            <h5 class="card-title">Titolo: {{ $announcement->title }}</h5>
                            <!-- Prezzo dell'annuncio -->
                            <p class="card-text">Prezzo: {{ $announcement->price }}$</p>
                            <!-- Descrizione dell'annuncio -->
                            <p class="card-text">Descrizione: {{ $announcement->description }}</p>
                            <!-- Data di pubblicazione dell'annuncio -->
                            <p class="card-text">Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }}</p>
                            <!-- Nome dell'utente che ha pubblicato l'annuncio -->
                            <p class="card-text">Pubblicato da: {{ $announcement->user->name }}</p>
                            <!-- Link per visualizzare i dettagli dell'annuncio -->
                            <a href="{{ route('announcements.show', compact('announcement')) }}" class="btn btn-danger">Vai al dettaglio</a>
                        </div>
                    </div>
                </div>
            @empty
                <!-- Messaggio visualizzato se non ci sono annunci -->
                <p class="col-12">Non hai ancora pubblicato niente</p>
            @endforelse
        </div>
    </div>
    
</x-layout>
