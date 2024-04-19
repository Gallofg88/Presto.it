<!-- Footer -->
<footer class="text-center" style=" background: rgb(246,182,18);
background: linear-gradient(117deg, rgba(246,182,18,1) 0%, rgba(108,237,255,1) 100%);">
    <!-- Sezione per eventuali messaggi di errore -->
    @if (session('access.denied'))
        <div class="alert alert-danger">
            {{ session('access.denied') }}
        </div>
    @endif
    <!-- Contenitore della griglia -->
    <div class="container p-4">

        <!-- Sezione: Social media -->
        <section class="mb-4">
            <!-- Icone dei social media -->
            <div class="d-flex justify-content-center">
                <!-- Facebook -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!"
                    role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!"
                    role="button"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!"
                    role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!"
                    role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!"
                    role="button"><i class="fab fa-linkedin-in"></i></a>

                <!-- Github -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!"
                    role="button"><i class="fab fa-github"></i></a>
            </div>
        </section>
        <!-- Fine sezione: Social media -->

        <!-- Sezione: Form -->
        <section class="mb-4">
            <form action="">
                <!-- Righe della griglia -->
                <div class="row justify-content-center">
                    <!-- Input per l'email -->
                    <div class="col-md-5 col-12">
                        <div class="form-outline mb-4">
                            <input type="email" id="form5Example2" class="form-control" />
                            <label class="form-label" for="form5Example2">Indirizzo email</label>
                        </div>
                    </div>
                    <!-- Pulsante di invio -->
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-4">
                            Iscriviti
                        </button>
                    </div>
                </div>
                <!-- Fine righe della griglia -->
            </form>
        </section>
        <!-- Fine sezione: Form -->
        <!-- Copyright -->
        <div class="text-center  p-0" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2024 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Sezione: Links -->
        <section
