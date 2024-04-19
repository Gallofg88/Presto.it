<x-layout>
    <div class="container d-flex justify-content-center">
        <div class="row text-center">
            <!-- Titolo e link per creare un nuovo annuncio -->
            
            <button href="{{route('create')}}"><h2>Pubblica Nuovo Annuncio </h2></button>
            <div class="col-12 text-center">
                <div class="row">
                    <!-- Ciclo attraverso gli annunci -->
                    @forelse ($announcements as $announcement)
                    <div class="col-12 col-md-4 my-2">
                        <!-- Card per ogni annuncio -->
                        <div class="card" style="width: 18rem;">
                            <!-- Immagine dell'annuncio -->
                            <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                            <div class="card-body">
                                <!-- Titolo dell'annuncio -->
                                <h5 class="card-title">Titolo: {{$announcement->title}}</h5>
                                <!-- Prezzo dell'annuncio -->
                                <p class="card-text">Prezzo: {{$announcement->price}}€</p>
                                <!-- Descrizione dell'annuncio -->
                                <p class="card-text">Descrizione: {{$announcement->description}}</p>
                                <!-- Data di pubblicazione dell'annuncio -->
                                <p class="card-text">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
                                <!-- Nome dell'utente che ha pubblicato l'annuncio -->
                                <p class="card-text">Pubblicato da: {{$announcement->user->name}}</p>
                                <!-- Link per visualizzare i dettagli dell'annuncio -->
                                <a href="{{route('announcements.show',compact('announcement'))}}" class="btn btn-danger">Vai al dettaglio</a>
                            </div>
                        </div>
                    </div>
                    @empty
                    <!-- Nessun annuncio trovato -->
                    <div class="col-12">
                        <div class="alert alert-warning py-3 shadow">    
                            <p>Non abbiamo trovato annunci per questa ricerca</p>
                        </div>
                    </div>
                    @endforelse
                    <!-- Paginazione -->
                    <div class="">
                        {{$announcements->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-layout>