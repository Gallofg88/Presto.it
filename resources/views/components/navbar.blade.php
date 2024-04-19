<!-- Contenitore principale della navbar -->
<div class="containerNavbar container">
    <!-- Navbar Bootstrap -->
    <nav class="navbar navbar-expand-lg bg-navbar mynavbar fixed-top">
        <!-- Contenitore fluido per la navbar -->
        <div class="container">
            <!-- Logo del sito nella navbar -->
            <a class="navbar-brand" href="#">
                <img id="logo" class="imagelogo" src="/img/Senza_titolo_5.png" alt="logo del sito">
            </a>
            <!-- Bottone per il toggle della navbar su dispositivi mobili -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Contenitore per i link della navbar -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Lista dei link principali della navbar -->
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <!-- Link per la homepage -->
                    <a class="nav-item mt-1" href="{{ route('home') }}">
                        <i class="fa-solid fa-house"  >Home</i>
                        
                    </a>
                    <!-- Link per gli annunci -->
                    <a class="nav-item mt-3" href="{{ route('announcements.index') }}">                        
                        <i class="fa-solid fa-bullhorn " style="color: #f7f7f7;" >Annunci</i>
                    </a> 
                    <!-- Link per diventare revisore -->
                    <a class="nav-item mt-5" href="{{ route('become.revisor') }}">
                        <i class="fa-solid fa-list-check " >Diventa revisore</i>
                        <a class="" ></a>                
                    </a>
                    @auth
                        <!-- Link per creare un annuncio -->              
                        <li class="nav-item" href="{{ route('create') }}">
                            <a class="nav-link" >Crea annunci</a>
                        </li>
                    @endauth
                    <!-- Dropdown per le categorie -->
                    <li class="nav-item dropdown mt-5">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-list">Categorie</i></a>
                        <!-- Menu a tendina con le categorie -->
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <!-- Loop attraverso le categorie -->
                            @foreach ($categories as $category)
                                <li><a class="dropdown-item"
                                        href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
                
                
                @auth
                    <div class="text-center">
                        <!-- Messaggio di benvenuto per l'utente autenticato -->
                        <a class="nav-link text-center">Benvenuto </a>
                        <!-- Link per accedere al proprio profilo -->
                        <a class="btn btn-outline-primary" type="button" href="{{ route('profile.profile') }}">{{ Auth::user()->name }}</a>
                        <!-- Se l'utente è un revisore, mostra il link alla sezione revisore -->
                        @if (Auth::user()->is_revisor)
                            <div class="nav-item">
                                <a class="badge-" href="{{ route('revisor.index') }}">Sei Revisore
                                    <span class="badge bg-dark">
                                        {{ App\Models\Announcement::toBeRevisionedCount() }}
                                        <span class="visually-hidden">Articoli non revisionati</span>
                                    </span>
                                </a>
                            </div>
                        @endif
                    </div>
                    <!-- Form per il logout -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="mx-3 button display-2 btn btn-outline-primary"><i
                                class="fa-solid fa-right-to-bracket fa-sm" style="color: #f90404;"></i></button>
                    </form>
                @endauth
                <!-- Sezione per gli utenti non autenticati -->
                @guest
                    <div class="buttonDad my-2 my-lg-0">
                        <!-- Bottone per registrarsi -->
                        <a href="{{ route('register') }}" class="glow-on-hover btn btn-outline-primary"
                            type="button">Registrati</a>
                        <!-- Bottone per accedere -->
                        <a href="{{ route('login') }}" class="glow-on-hover mt-1 btn btn-outline-primary"
                            type="button">Accedi</a>
                    </div>
                    <div>
                        <!-- Inclusione del componente language per l'italiano -->
                        <x-language  lang="it" />
                        <!-- Inclusione del componente language per l'inglese -->
                        <x-language  lang="en" />
                        <!-- Inclusione del componente language per lo spagnolo -->
                        <x-language  lang="es" />
                    </div>
                @endguest
            </div>
        </div>
    </nav>
</div>
