<x-layout>
    @if (session('message'))
    <!-- Mostra un messaggio di successo se presente nella sessione -->
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<!-- Contenitore principale con margine top di 5 unità -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <!-- Colonna che occupa 12 unità su schermi piccoli e 5 unità su schermi medi -->
        <div class="col-12 col-md-5 text-center">
            <form method="GET" action="{{ route('become.revisor') }}">
                @csrf <!-- Protezione CSRF -->

                <!-- Campo per l'inserimento dell'email -->
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Inserisci la tua email</label>
                    <input name="email" type="email" class="form-control" id="inputEmail">
                </div>

                <!-- Campo per l'inserimento del nome -->
                <div class="mb-3">
                    <label for="inputName" class="form-label">Nome</label>
                    <input name="name" type="text" class="form-control" id="inputName">
                </div>

                <!-- Campo per l'inserimento del messaggio -->
                <div class="mb-3">
                    <label for="inputMessage" class="form-label">Inserisci il tuo messaggio</label>
                    <textarea name="body" type="text" class="form-control" id="inputMessage" cols="30" rows="10"></textarea>
                </div>

                <!-- Pulsante di invio del messaggio -->
                <button type="submit" class="btn btn-primary">Invia il messaggio</button>
            </form>
        </div>
    </div>
</div>

</x-layout>