<x-layout>
    <div>
        <!-- Contenitore fluido per adattarsi a diverse dimensioni di schermo -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Titolo condizionale basato sull'esistenza di annunci da controllare -->
                    <h1>
                        {{$announcement_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}
                    </h1>
                </div>
            </div>
        </div>
    </div>
    
    @if ($announcement_to_check)
    <!-- Se ci sono annunci da controllare, mostra il carousel e i pulsanti di accettazione e rifiuto -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Carousel per visualizzare le immagini degli annunci -->
                <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/200/200" class="img-fluid p-3 randed" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/200/200" class="img-fluid p-3 randed" alt="">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/200/200" class="img-fluid p-3 randed" alt="">
                        </div>
                    </div>
                    <!-- Pulsanti per scorrere il carousel -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#showCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    <!-- Dettagli dell'annuncio -->
                    <h5 class="text-dark">Titolo: {{$announcement_to_check->title}}</h5>
                    <p class="card-text text-dark">Descrizione: {{$announcement_to_check->description}}</p>
                    <p class="text-dark">Data di creazione: {{$announcement_to_check->created_at->format('d/m/Y')}}</p>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <!-- Form per accettare l'annuncio -->
                <form action="{{route ('revisor.accept', ['announcement'=>$announcement_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success shadow">Accetta</button>
                </form>
            </div>
            <div class="col-12 col-md-6">
                <!-- Form per rifiutare l'annuncio -->
                <form action="{{route('revisor.reject' , ['announcement'=>$announcement_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                </form>
            </div>
        </div>
    </div>
    @endif
    
</x-layout>