<x-layout>
    <div>
        <!-- Contenitore fluido per adattarsi a diverse dimensioni di schermo -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Titolo condizionale basato sull'esistenza di annunci da controllare -->
                    <h1 class="text-center">
                        {{$announcement_to_check ? 'Annunci da revisionare' : 'Non ci sono annunci da revisionare'}}
                    </h1>
                </div>
            </div>
        </div>
    </div>
    
    @if ($announcement_to_check)
    <!-- Se ci sono annunci da controllare, mostra il carousel e i pulsanti di accettazione e rifiuto -->
    <div class="container ">
        <div class="row ">
            <div class="col-12 mx-3 mt-4 d-flex justify-content-center">
                <!-- Carousel per visualizzare le immagini degli annunci -->
              
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
                    <!-- Dettagli dell'annuncio -->
                    <h5 class="text-dark mx-5 mt-2">Titolo: {{$announcement_to_check->title}}</h5>
                    <p class="card-text text-dark mx-3"> {{$announcement_to_check->user->name}}</p>
                    <p class="card-text text-dark mx-3">Descrizione: {{$announcement_to_check->description}}</p>
                    <p class="text-dark mx-3">Data di creazione: {{$announcement_to_check->created_at->format('d/m/Y')}}</p>
                </div>
            </div>
            <div class="col-12 mx-3 mt-4 px-5 d-flex justify-content-center">
                <!-- Form per accettare l'annuncio -->
                <form action="{{route ('revisor.accept', ['announcement'=>$announcement_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success shadow">Accetta</button>
                </form>
            </div> 
           
            <div class="col-12 mx-3 mt-4 px-5 d-flex justify-content-center">
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