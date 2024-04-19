<x-layout>
    <div class="container">
        <div class="row justify-content-center"> <!-- Riga centrata orizzontalmente -->
            @forelse ($category->announcements as $announcement)
            <div class="col-12 col-md-6 col-lg-4 my-2"> <!-- Colonne per gestire il layout responsivo -->
                <div class="card">
                    <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title">Categoria: {{$announcement->category->name}}</h4>
                        <h5 class="card-title">{{$announcement->title}}</h5>
                        <p class="card-text">{{$announcement->price}}€</p>
                        <p class="card-text">Pubblicato da: {{$announcement->user->name}}</p>
                        <p class="card-text">Data di Pubblicazione: {{$announcement->created_at->format('d/m/Y')}}</p>
                        <a href="{{ route('announcements.show', compact('announcement')) }}" class="btn btn-danger">Vai al dettaglio</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center"> <!-- Se non ci sono annunci, centra il testo -->
                <p>Non sono ancora presenti degli annunci!</p>
                <h2>Pubblicane uno: <a href="{{ route('create') }}">Nuovo annuncio</a></h2>
            </div>
            @endforelse
        </div>
    </div>
    
</x-layout>