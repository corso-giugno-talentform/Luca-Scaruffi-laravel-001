<x-main title="Contatti - Il Mio Portfolio">
    <main class="py-5 mt-5">
        <div class="container py-5">
            <div class="fade-in">
                <h1 class="mb-5 text-center fw-bold display-4">Contattami</h1>
                <p class="lead text-center mb-5 mx-auto text-muted" style="max-width: 800px;">
                    Hai un'idea, una domanda o vuoi semplicemente salutarmi? Sono qui per ascoltarti! Compila il modulo
                    qui sotto o usa i contatti diretti.
                </p>
            </div>

            <div class="row justify-content-center g-5 fade-in">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-light rounded-3 bg-white p-4">
                        <div class="card-body">
                            <h2 class="card-title fw-bold mb-4 text-center text-primary">Invia un Messaggio</h2>
                            <form action="#" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nome" class="form-label fw-semibold">Nome e Cognome</label>
                                    <input type="text" class="form-control" id="nome" name="nome"
                                        placeholder="Il tuo nome completo" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-semibold">Indirizzo Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="la.tua@email.com" required>
                                </div>
                                <div class="mb-3">
                                    <label for="oggetto" class="form-label fw-semibold">Oggetto</label>
                                    <input type="text" class="form-control" id="oggetto" name="oggetto"
                                        placeholder="Es. Richiesta di preventivo, Collaborazione" required>
                                </div>
                                <div class="mb-4">
                                    <label for="messaggio" class="form-label fw-semibold">Messaggio</label>
                                    <textarea class="form-control" id="messaggio" name="messaggio" rows="6"
                                        placeholder="Scrivi qui il tuo messaggio..." required></textarea>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary btn-lg"><i
                                            class="bi bi-send-fill me-2"></i> Invia Messaggio</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="card shadow-lg border-light rounded-3 bg-white p-4">
                        <div class="card-body">
                            <h2 class="card-title fw-bold mb-4 text-center text-primary">Contatti Diretti</h2>
                            <ul class="list-group list-group-flush mb-4">
                                <li class="list-group-item bg-transparent border-0 d-flex align-items-center mb-2">
                                    <i class="bi bi-envelope-fill text-primary fs-4 me-3"></i>
                                    <div>
                                        <h6 class="mb-0 fw-semibold text-muted">Email</h6>
                                        <p class="mb-0 text-dark">info@[tuodominio].com</p>
                                    </div>
                                </li>
                                <li class="list-group-item bg-transparent border-0 d-flex align-items-center mb-2">
                                    <i class="bi bi-phone-fill text-primary fs-4 me-3"></i>
                                    <div>
                                        <h6 class="mb-0 fw-semibold text-muted">Telefono</h6>
                                        <p class="mb-0 text-dark">+39 123 456 7890</p>
                                    </div>
                                </li>
                                <li class="list-group-item bg-transparent border-0 d-flex align-items-center mb-2">
                                    <i class="bi bi-linkedin text-primary fs-4 me-3"></i>
                                    <div>
                                        <h6 class="mb-0 fw-semibold text-muted">LinkedIn</h6>
                                        <p class="mb-0 text-dark"><a href="https://www.linkedin.com/in/tuo-profilo"
                                                target="_blank" class="text-decoration-none text-primary">Il Mio
                                                Profilo LinkedIn</a></p>
                                    </div>
                                </li>
                                <li class="list-group-item bg-transparent border-0 d-flex align-items-center mb-2">
                                    <i class="bi bi-geo-alt-fill text-primary fs-4 me-3"></i>
                                    <div>
                                        <h6 class="mb-0 fw-semibold text-muted">Posizione</h6>
                                        <p class="mb-0 text-dark">[La Tua Città, Nazione]</p>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="fw-bold mb-3 text-center text-primary">Seguimi sui Social</h3>
                            <div class="d-flex justify-content-center gap-3">
                                <a href="https://www.linkedin.com/in/tuo-profilo" target="_blank"
                                    class="text-primary"><i class="bi bi-linkedin fs-2"></i></a>
                                <a href="https://github.com/tuo-profilo" target="_blank" class="text-primary"><i
                                        class="bi bi-github fs-2"></i></a>
                                {{-- Aggiungi altri social se pertinenti --}}
                                {{-- <a href="#" target="_blank" class="text-primary"><i class="bi bi-twitter fs-2"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</x-main>
