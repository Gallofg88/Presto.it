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
              
            <div class="card card-raised card-carousel">
                <div id="carouselindicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselindicators" data-slide-to="0" class=""></li>
                    <li data-target="#carouselindicators" data-slide-to="1" class="active"></li>
                    <li data-target="#carouselindicators" data-slide-to="2" class=""></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active carousel-item-left">
                      <img class="d-block w-100" src="https://picsum.photos/100/100" alt="First slide">
                      <div class="carousel-caption d-none d-md-block">
                        <h4>
                          <i class="fa fa-map-marker"></i>
                          Dharamshala,Himachal Pradesh, India
                        </h4>
                      </div>
                    </div>
                    <div class="carousel-item carousel-item-next carousel-item-left">
                      <img class="d-block w-100" src="https://i.imgur.com/l3iUv92.jpg" alt="Second slide">
                      <div class="carousel-caption d-none d-md-block">
                        <h4>
                          <i class="fa fa-map-marker"></i>
                         Manali,Himachal Pradesh, India
                        </h4>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="https://i.imgur.com/rHCSTM1.jpg" alt="Third slide">
                      <div class="carousel-caption d-none d-md-block">
                        <h4>
                          <i class="fa fa-map-marker"></i>
                          Kerala,Kerala, India
                        </h4>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselindicators" role="button" data-slide="prev" data-abc="true">
                    <i class="fa fa-chevron-left"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselindicators" role="button" data-slide="next" data-abc="true">
                     <i class="fa fa-chevron-right"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
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