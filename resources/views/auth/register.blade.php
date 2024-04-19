<x-layout>
    <div class="container">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-md-8">
                <!-- Spazio vuoto per il layout -->
                <div style="height: 200px"></div>
    
                <!-- Sfondo personalizzato -->
                <div class="custom-bg">
                    <!-- Contenitore del modulo di registrazione -->
                    <div class="form-container">
                        <!-- Gestione degli errori -->
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <!-- Form di registrazione -->
                        <div class="container">
                            <div class="row d-flex justify-content-center text-center align-items-center">
                                <div class="col-lg-7">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <!-- Campo Nome -->
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nome</label>
                                            <input name="name" placeholder="Nome" type="text" class="form-control" id="name">
                                        </div>
                                        <!-- Campo Email -->
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input name="email" placeholder="Email" type="email" class="form-control" id="email">
                                        </div>
                                        <!-- Campo Password -->
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <!-- Input password con icona per mostrare/nascondere la password -->
                                            <div class="input-group">
                                                <input name="password" placeholder="Password" type="password" class="form-control" id="password">
                                                <button class="btn btn-outline-secondary" type="button" onclick="togglePassword()">
                                                    <!-- Icona per mostrare/nascondere la password -->
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- Conferma Password -->
                                        <div class="mb-3">
                                            <label for="password_confirmation" class="form-label">Conferma Password</label>
                                            <input name="password_confirmation" placeholder="Conferma Password"  type="password" class="form-control" id="password_confirmation">
                                        </div>
                                        <!-- Bottone di registrazione -->
                                        <button type="submit" class="btn btn-primary">Registrati</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Funzione per mostrare/nascondere la password
        function togglePassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    
</x-layout>
