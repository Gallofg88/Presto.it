<x-layout>
    <!-- Intestazione dell'annuncio -->
    <h2 class="text-center">Annuncio {{ $announcement->title }}</h2>
    
    <div class="container">
        <div class="row">
            <!-- Utilizzo di 8 colonne su dispositivi di dimensioni medie e grandi -->
            <div class="col-12 col-md-6 mt-3">
                <div class="card prova">
                    <!-- Carousel per le immagini dell'annuncio -->
                    <div id="carouselExampleAutoplaying" class="carousel slide " data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="https://picsum.photos/800/601" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://picsum.photos/800/602" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="https://picsum.photos/800/603" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    <div class="card-body">
                        <!-- Informazioni sull'annuncio -->
                        <h3>Titolo: {{ $announcement->title }}</h3>
                        <span class="card-text btn-warning p-1">Prezzo: {{ $announcement->price }}$</span>
                        <p class="card-text">Categoria: {{ $announcement->category->name }}</p>
                        <p class="card-text">Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }}</p>
                        <p class="card-text">Pubblicato da: {{ $announcement->user->name }}</p>
                        <!-- Pulsanti di navigazione -->
                        <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}" class="btn mybtn">Vai alle categorie</a>
                        <a href="{{ route('home') }}" class="btn btn-danger mt-2 mybtnone">Torna indietro</a>
                    </div>
                </div>
            </div>
            <!-- La parte successiva del layout può essere aggiunta qui -->
        </div>
    </div>
</x-layout>
