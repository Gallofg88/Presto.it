<x-layout>
    <div class="container">
        <!-- Inizio riga -->
        <div class="row justify-content-center text-center"> <!-- Utilizzata la classe justify-content-center per centrare il contenuto orizzontalmente e text-center per centrare il testo -->
            <!-- Inizio colonna -->
            <div class="col-md-8 col-lg-6"> <!-- Utilizzate le classi col-md-8 e col-lg-6 per gestire il layout su dispositivi di diverse dimensioni -->
                <!-- Spazio vuoto per l'allineamento verticale -->
                <div style="height: 100px"></div> <!-- L'altezza ridotta per adattarsi meglio agli schermi più piccoli -->
                <h2>Accedi</h2>
    
                <!-- Verifica degli errori di validazione -->
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
    
                <!-- Form per l'accesso -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf <!-- Protezione CSRF -->
    
                    <!-- Campo email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email" required> <!-- Aggiunto attributo required per la validazione -->
                    </div>
    
                    <!-- Campo password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input name="password" type="password" class="form-control" id="password" required> <!-- Aggiunto attributo required per la validazione -->
                            <button class="btn btn-outline-dark bg-primary" type="button" onclick="togglePassword()">Mostra/Nascondi Password</button>
                        </div>
                    </div>
                    
                    <!-- Pulsante di accesso -->
                    <button type="submit" class="btn btn-primary">Accedi</button>
                </form>
            </div> <!-- Fine colonna -->
        </div> <!-- Fine riga -->
    </div>
    
   
    
</x-layout>
