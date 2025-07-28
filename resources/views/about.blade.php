<x-main title="Chi Sono - Il Mio Portfolio">

    <main class="py-5 mt-5">
        <div class="container py-5">
            <h1 class="mb-2 text-center fw-bold display-4 fade-in">Chi Sono</h1>
            <p class="lead text-center mb-5 mx-auto text-muted fade-in" style="max-width: 800px;">
                Scopri la mia storia, le mie competenze e la filosofia che guida il mio lavoro.
            </p>

            <div class="row g-5 mb-5 align-items-center fade-in">
                <div class="col-lg-7">
                    <h2 class="fw-bold mb-3 display-5 text-primary">La Mia Storia</h2>
                    <p class="lead mb-4 text-muted">
                        Sono [Il Tuo Nome], uno sviluppatore web appassionato con [Numero] anni di esperienza nel
                        trasformare idee innovative in soluzioni digitali robuste e intuitive. La mia avventura nel
                        mondo dello sviluppo è iniziata con la curiosità per [descrivi un interesse iniziale o un
                        aneddoto],
                        e da allora non ho mai smesso di imparare e crescere.
                    </p>
                    <p class="text-dark">
                        Ho avuto il privilegio di lavorare su una vasta gamma di progetti, dal frontend accattivante al
                        backend complesso, per clienti di diverse dimensioni e settori. La mia filosofia si basa
                        sull'ascolto attento delle esigenze del cliente, sulla comunicazione trasparente e sulla ricerca
                        dell'eccellenza in ogni linea di codice. Credo che la tecnologia sia uno strumento potente per
                        risolvere problemi reali e migliorare la vita delle persone.
                    </p>
                </div>
                <div class="col-lg-5">
                    <img src="https://via.placeholder.com/600x600/f0f0f0/cccccc?text=La+Tua+Immagine"
                        class="img-fluid rounded-4 shadow-lg w-100" alt="La Tua Immagine Profilo">
                </div>
            </div>

            <div class="py-5 bg-light p-4 rounded-3 shadow-sm mb-5 fade-in">
                <h2 class="fw-bold mb-5 display-5 text-primary text-center">Le Mie Competenze</h2>
                <div class="row g-5">
                    <div class="col-lg-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-transparent border-0 d-flex align-items-start py-2">
                                <i class="bi bi-code-slash text-success me-3 fs-5 mt-1"></i>
                                <div>
                                    <h5 class="fw-semibold">Frontend</h5>
                                    <p class="text-muted mb-0">HTML5, CSS3, JavaScript (React, Vue.js), Bootstrap</p>
                                </div>
                            </li>
                            <li class="list-group-item bg-transparent border-0 d-flex align-items-start py-2">
                                <i class="bi bi-server text-success me-3 fs-5 mt-1"></i>
                                <div>
                                    <h5 class="fw-semibold">Backend</h5>
                                    <p class="text-muted mb-0">PHP (Laravel), Node.js (Express), Python (Django)</p>
                                </div>
                            </li>
                            <li class="list-group-item bg-transparent border-0 d-flex align-items-start py-2">
                                <i class="bi bi-database-fill-check text-success me-3 fs-5 mt-1"></i>
                                <div>
                                    <h5 class="fw-semibold">Database</h5>
                                    <p class="text-muted mb-0">MySQL, PostgreSQL, MongoDB, SQL Server</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-transparent border-0 d-flex align-items-start py-2">
                                <i class="bi bi-tools text-success me-3 fs-5 mt-1"></i>
                                <div>
                                    <h5 class="fw-semibold">Strumenti</h5>
                                    <p class="text-muted mb-0">Git, Docker, Webpack, Postman, VS Code</p>
                                </div>
                            </li>
                            <li class="list-group-item bg-transparent border-0 d-flex align-items-start py-2">
                                <i class="bi bi-vector-pen text-success me-3 fs-5 mt-1"></i>
                                <div>
                                    <h5 class="fw-semibold">Design</h5>
                                    <p class="text-muted mb-0">Figma, Adobe XD (Principi UI/UX), Prototipazione</p>
                                </div>
                            </li>
                            <li class="list-group-item bg-transparent border-0 d-flex align-items-start py-2">
                                <i class="bi bi-cloud-fill text-success me-3 fs-5 mt-1"></i>
                                <div>
                                    <h5 class="fw-semibold">Cloud</h5>
                                    <p class="text-muted mb-0">AWS (base), Heroku, Netlify, DigitalOcean</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5 py-3 bg-light p-4 rounded-3 shadow-sm fade-in">
                <h2 class="mb-4 fw-bold display-5">Pronto a collaborare?</h2>
                <p class="lead mb-4 mx-auto" style="max-width: 800px;">
                    Sono sempre alla ricerca di nuove sfide e opportunità per creare qualcosa di straordinario.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-success btn-lg"><i class="bi bi-envelope me-2"></i>
                    Contattami</a>
            </div>
        </div>
    </main>

</x-main>
