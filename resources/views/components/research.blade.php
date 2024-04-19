<!-- Form per la ricerca di annunci -->
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-8">
            <form class="d-flex mx-auto my-2 my-lg-0" action="{{ route('announcement.search') }}" method="GET">
                <!-- Bottone per la ricerca -->
                <input name="searched" class="form-control me-2 text-center" type="search" placeholder="Digita qui"
                    aria-label="search">
                <button class="btn btn-outline-primary" type="submit">Ricerca</button>
            </form>
        </div>
    </div>
</div>
