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
                        <h2 class="display-1">{{ __('message.welcome') }}</h2>

                        @foreach ($announcements as $announcement)
                            <!-- Ciclo attraverso gli annunci -->
                            <div class="col-12 col-md-4 mt-4">
                                <div class="card" style="width: 18rem;">
                                    <img src="https://picsum.photos/200/200" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h3 class="card-title">{{ $announcement->title }}</h3>
                                        <p class="card-text">{{ $announcement->price }}€</p>
                                        <p class="card-text">Categoria: {{ $announcement->category->name }}</p>
                                        <p class="card-text">Pubblicato il:
                                            {{ $announcement->created_at->format('d/m/Y') }}</p>
                                        <a href="{{ route('announcements.show', compact('announcement')) }}"
                                            class="btn btn-primary">Vai al dettaglio</a>
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
