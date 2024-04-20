<!-- Contenitore principale della navbar -->
<div class="container-fluid ">
    <!-- Navbar Bootstrap -->
    <nav class="navbar navbar-expand-lg bg-navbar bg-dark fixed-top mynavbar">
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
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- Link per la homepage -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fa-solid fa-house"></i> Home
                </a>
            </li>
            <!-- Link per gli annunci -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('announcements.index') }}">
                    <i class="fa-solid fa-bullhorn"style="color: black"  ></i> Annunci
                </a>
            </li>
            <!-- Link per diventare revisore -->
            
            @auth
            <!-- Link per creare un annuncio -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('create') }}">Crea annunci</a>
            </li>
            @if (!Auth::user()->is_revisor)
            <li class="nav-item">
                <a class="nav-link" href="{{ route('become.revisor') }}">
                    <i class="fa-solid fa-list-check"></i> Diventa revisore
                </a>
            </li>
            @endif
            @endauth
            
            
            
            
            <!-- Dropdown per le categorie -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-list"></i> 
                Categorie</a>
                <!-- Menu a tendina con le categorie -->
                <ul class="dropdown-menu" aria-="navbarDropdown">
                    <!-- Loop attraverso le categorie -->
                    @foreach ($categories as $category)
                    <li>
                        
                        <a class="dropdown-item" href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }}</a>
                        
                    </li>
                    @endforeach
                </ul>
            </li>
        </ul>
       
        
        @auth
        <li class="nav-item dropdown drop">
            <a class="nav-link dropdown-toggle" id="navbarDropdownUser" role="button"
            data-bs-toggle="dropdown">
            <i class="fa-solid fa-user"></i> Utente
        </a>
        <!-- Menu a tendina con le categorie -->
        <ul class="dropdown-menu about" >
            <li>
                <!-- Link per accedere al proprio profilo -->
                <a class="dropdown-item" href="{{ route('profile.profile') }}">Profilo</a>
            </li>
            <li class="my-2 revisor mx-2">
                
                <!-- Se l'utente è un revisore, mostra il link alla sezione revisore -->
                @if (Auth::user() && Auth::user()->is_revisor)
                <a href="{{ route('revisor.index') }}" class="badge bg-dark me-3">Sei Revisore
                    <span>{{ App\Models\Announcement::toBeRevisionedCount() }}</span>
                </a>
                @endif
            </li>
            <li>
                <!-- Form per il logout -->
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </li>
    



    <li class="nav-item dropdown drop">
        <a class="nav-link dropdown-toggle" id="navbarDropdownUser" role="button"
        data-bs-toggle="dropdown">
        <i class="fa-solid fa-globe"></i> Seleziona la lingua
    </a>
    <!-- Menu a tendina per le lingue -->
    <ul class="dropdown-menu about languages-container" >
       
        <li class="">
            
            <a class="dropdown-item" href="#"><x-language lang="it" /></a>
       
           
        </li>
        <li class="">
            <a class="dropdown-item" href="#"><x-language lang="en" /></a>
           
        </li>
        <li>
            <a class="dropdown-item" href="#"><x-language lang="es" /></a>
           
        </li>
       
    </ul>
</li>


   
@endauth  

<!-- Sezione per gli utenti non autenticati -->
@guest
<div class="d-flex">
    <!-- Bottone per registrarsi -->
    <a href="{{ route('register') }}" class="btn btn-outline-primary me-3">Registrati</a>
    <!-- Bottone per accedere -->
    <a href="{{ route('login') }}" class="btn btn-outline-primary">Accedi</a>
</div>

@endguest 



</div>
</nav>
</div>
