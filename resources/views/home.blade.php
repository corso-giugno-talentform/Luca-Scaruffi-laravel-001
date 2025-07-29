<x-main title="Homepage - Il Mio Portfolio">
    {{-- Hero Section --}}
    <section class="hero-section text-dark text-center py-5 py-md-5 py-lg-6 mt-5 fade-in">
        <div class="container py-5">
            <h1 class="display-3 fw-bold mb-4">Ciao, sono [Il Tuo Nome]!</h1>
            <p class="lead mb-5 mx-auto text-muted" style="max-width: 800px;">
                Sono uno sviluppatore web e [il tuo ruolo principale, es: UI/UX Designer, specialista SEO,
                consulente digitale] con una passione per la creazione di soluzioni digitali che lasciano il segno.
                Trasformo idee complesse in prodotti user-friendly e performanti.
            </p>
            <div class="mt-4 d-flex flex-column flex-sm-row justify-content-center gap-3">
                <a href="{{ route('projects.index') }}" class="btn btn-primary btn-lg"><i
                        class="bi bi-arrow-right me-2"></i> Esplora i Miei
                    Progetti</a>
                <a href="{{ route('about') }}" class="btn btn-outline-primary btn-lg"><i class="bi bi-person me-2"></i>
                    Scopri Chi Sono</a>
            </div>
        </div>
    </section>

    {{-- Why Choose Me Section --}}
    <section class="py-5 section-bg-light fade-in">
        <div class="container">
            <h2 class="text-center fw-bold mb-5 display-5">Perché Scegliermi?</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100 shadow-sm text-center p-4 rounded-4">
                        <div class="card-body">
                            <i class="bi bi-lightbulb-fill text-warning display-4 mb-3"></i>
                            <h5 class="card-title fw-bold mb-3">Innovazione Continua</h5>
                            <p class="card-text text-muted">Sempre aggiornato sulle ultime tecnologie e tendenze per
                                offrire soluzioni all'avanguardia.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm text-center p-4 rounded-4">
                        <div class="card-body">
                            <i class="bi bi-hand-thumbs-up-fill text-success display-4 mb-3"></i>
                            <h5 class="card-title fw-bold mb-3">Qualità e Affidabilità</h5>
                            <p class="card-text text-muted">Lavoro meticoloso e attenzione ai dettagli per garantire
                                prodotti robusti e senza difetti.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm text-center p-4 rounded-4">
                        <div class="card-body">
                            <i class="bi bi-people-fill text-info display-4 mb-3"></i>
                            <h5 class="card-title fw-bold mb-3">Approccio Collaborativo</h5>
                            <p class="card-text text-muted">Credo nella comunicazione aperta e nella collaborazione
                                stretta con il cliente in ogni fase del progetto.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- My Services Section --}}
    <section class="py-5 section-bg-white fade-in">
        <div class="container">
            <h2 class="text-center fw-bold mb-5 display-5">I Miei Servizi</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100 shadow-sm text-center p-4 rounded-4">
                        <div class="card-body">
                            <i class="bi bi-code-slash text-primary display-4 mb-3"></i>
                            <h5 class="card-title fw-bold mb-3">Sviluppo Web Personalizzato</h5>
                            <p class="card-text text-muted">Creazione di siti web e applicazioni web su misura, dal
                                concept al lancio.</p>
                            <a href="{{ route('services.show', ['slug' => 'sviluppo-website-e-web-app']) }}"
                                class="btn btn-outline-primary mt-3 btn-sm">Scopri di più</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm text-center p-4 rounded-4">
                        <div class="card-body">
                            <i class="bi bi-bezier2 text-secondary display-4 mb-3"></i>
                            <h5 class="card-title fw-bold mb-3">UI/UX Design Intuitivo</h5>
                            <p class="card-text text-muted">Progettazione di interfacce utente intuitive e
                                accattivanti per un'esperienza utente eccellente.</p>
                            <a href="{{ route('services.show', ['slug' => 'grafica-e-ui-ux-design']) }}"
                                class="btn btn-outline-primary mt-3 btn-sm">Scopri di più</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm text-center p-4 rounded-4">
                        <div class="card-body">
                            <i class="bi bi-megaphone text-danger display-4 mb-3"></i>
                            <h5 class="card-title fw-bold mb-3">Comunicazione Strategica</h5>
                            <p class="card-text text-muted">Sviluppo di strategie di comunicazione digitale
                                efficaci per raggiungere il tuo pubblico.</p>
                            <a href="{{ route('services.show', ['slug' => 'comunicazione-strategica']) }}"
                                class="btn btn-outline-primary mt-3 btn-sm">Scopri di più</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="{{ route('services.index') }}" class="btn btn-dark btn-lg">Vedi Tutti i Servizi <i
                        class="bi bi-list-check ms-2"></i></a>
            </div>
        </div>
    </section>

    {{-- Call to Action Section --}}
    <section class="py-5 text-center cta-section fade-in">
        <div class="container">
            <h2 class="mb-4 fw-bold display-5">Hai un Progetto in Mente?</h2>
            <p class="lead mb-5 mx-auto text-muted" style="max-width: 800px;">
                Sono qui per aiutarti a trasformare la tua visione in una realtà digitale. Non esitare a contattarmi
                per una consulenza gratuita o per discutere le tue esigenze.
            </p>
            <div class="mt-4">
                <a href="{{ route('contact') }}" class="btn btn-success btn-lg"><i class="bi bi-chat-dots me-2"></i>
                    Iniziamo un Progetto!</a>
            </div>
        </div>
    </section>
</x-main>
