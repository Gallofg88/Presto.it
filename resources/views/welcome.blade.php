<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if (session('access.denied'))
                    <!-- Mostra un messaggio di errore se l'accesso è negato -->
                    <div class="alert alert-danger">
                        {{ session('access.denied') }}
                    </div>
                @endif

                @if (session('message'))
                    <!-- Mostra un messaggio di successo -->
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                @if (session('revisor'))
                    <!-- Mostra un messaggio di successo specifico per i revisori -->
                    <div class="alert alert-success">
                        {{ session('revisor') }}
                    </div>
                @endif

                @if ($errors->any())
                    <!-- Mostra tutti gli errori di validazione -->
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="container d-flex justify-content-center">
                    <div class="row text-center">
                       
                            <h2  class="display-1 animated-title">{{ __('message.welcome') }}</h2>

                       

                        @foreach ($announcements as $announcement)
                            <!-- Ciclo attraverso gli annunci -->
                            <div class="col-12 col-md-4 py-4"> <!-- Colonne per gestire il layout responsivo -->
                                <div class="card h-100 shadow-sm"> 
                                    <img src="https://picsum.photos/300/300" class="card-img-top" alt="...">
                                    <div class="card-body"> 
                                        <h5 class="card-title text-center">{{$announcement->title}}</h5>
                                        <div class="clearfix mb-2">
                                            <span class="float-start badge rounded-pill bg-success">{{$announcement->price}}€</span> 
                                            <h5 class="card-title px-3">Pubblicato da: {{$announcement->user->name}}</h5>
                                        </div>
                                        <h5 class="card-title text-center">Categoria: {{$announcement->category->name}}</h5>
                                    
                                        <p class="card-text">Data di Pubblicazione: {{$announcement->created_at->format('d/m/Y')}}</p>
                                        <div class="d-grid gap-2 my-4"><a href="{{ route('announcements.show', compact('announcement')) }}"  class="btn btn-warning">Vai al dettaglio</a>
                                        </div> 
                                    </div>
                                </div> 
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
