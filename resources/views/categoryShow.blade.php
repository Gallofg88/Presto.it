<x-layout>
    <main>
        <div class="container-fluid bg-trasparent my-4 p-3">
        
            <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3"> <!-- Riga centrata orizzontalmente -->
                @forelse ($category->announcements as $announcement)
                <div class="col-12 col-md-4"> <!-- Colonne per gestire il layout responsivo -->
                    <div class="card h-100 shadow-sm"> 
                        <img src="https://picsum.photos/300/300" class="card-img-top" alt="...">
                        <div class="card-body"> 
                            <h5 class="card-title text-center">{{$announcement->title}}</h5>
                            <div class="clearfix mb-2">
                                <span class="float-start badge rounded-pill bg-success">{{$announcement->price}}€</span> 
                                <h5 class="card-title px-3">Pubblicato da: {{$announcement->user->name}}</h5>
                            </div>
                            <h5 class="card-title text-center">Categoria: {{$announcement->category->name}}</h5>
                            <h5 class="card-title">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem eaque ut eveniet aut quis rerum. Asperiores accusamus harum ducimus velit odit ut. Saepe, iste optio laudantium sed aliquam sequi.</h5>
                            <p class="card-text">Data di Pubblicazione: {{$announcement->created_at->format('d/m/Y')}}</p>
                            <div class="d-grid gap-2 my-4"><a href="{{ route('announcements.show', compact('announcement')) }}"  class="btn btn-warning">Vai al dettaglio</a>
                            </div> 
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
    </main>
        
        
</x-layout>