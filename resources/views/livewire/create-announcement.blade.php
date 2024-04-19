<div>
    <!-- Messaggio di successo mostrato se presente nella sessione -->
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    
    <!-- Spazio vuoto per separare il contenuto superiore -->
    <div style="height: 60px"></div>
    
    <!-- Contenitore principale -->
    <div class="container">
        <!-- Riga per allineare il contenuto al centro -->
        <div class="row justify-content-center">
            <!-- Colonna che occupa 8 su 12 colonne su schermi medi e grandi -->
            <div class="col-md-8">
                <!-- Form per l'invio dei dati -->
                <form wire:submit='store' enctype="multipart/form-data">
                    <!-- Campo Titolo -->
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input wire:model.blur='title' type="text" class="form-control @error('title') is-invalid @enderror" id="title">
                        @error('title')
                        <div class="text-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                    <!-- Campo Prezzo -->
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input wire:model.blur='price' type="number" class="form-control @error('price') is-invalid @enderror" id="price">
                        @error('price')
                        <div class="text-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                    <!-- Campo Descrizione -->
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione dell'articolo</label>
                        <textarea wire:model.blur='description' class="form-control @error('description') is-invalid @enderror" id="description" cols="30" rows="10"></textarea>
                        @error('description')
                        <div class="text-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                    <!-- Campo Categoria -->
                    <div class="mb-3">
                        <label for="category">Categoria</label>
                        <select wire:model.defer="category" id="category" class="form-control">
                            <option value="">Scegli la categoria</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Bottone di invio -->
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>
    </div>
</div>
