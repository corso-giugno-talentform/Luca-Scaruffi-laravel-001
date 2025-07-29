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
                    {{-- Includi il componente del modulo di contatto --}}
                    <x-contact-form />
                </div>

                <div class="col-lg-5">
                    <div class="card shadow-lg rounded-4 bg-white p-4">
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
                                    <i class="bi bi-geo-alt-fill text-primary fs-4 me-3"></i>
                                    <div>
                                        <h6 class="mb-0 fw-semibold text-muted">Posizione</h6>
                                        <p class="mb-0 text-dark">[La Tua Città, Nazione]</p>
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
                                    <i class="bi bi-github text-primary fs-4 me-3"></i>
                                    <div>
                                        <h6 class="mb-0 fw-semibold text-muted">GitHub</h6>
                                        <p class="mb-0 text-dark"><a href="https://github.com/tuo-profilo"
                                                target="_blank" class="text-decoration-none text-primary">Il Mio
                                                Profilo GitHub</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    {{-- Custom Alert Modal (sostituisce alert()) - Spostato qui per essere sempre disponibile nel DOM --}}
    {{-- Questo modal è ora gestito dallo script in resources/js/app.js --}}
    <div class="modal fade" id="customAlertModal" tabindex="-1" aria-labelledby="customAlertModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 shadow-lg">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title fw-bold" id="customAlertModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0 text-center">
                    <i id="alertIcon" class="display-4 mb-3"></i>
                    <p id="alertMessage" class="lead"></p>
                </div>
                <div class="modal-footer border-0 pt-0 justify-content-center">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Chiudi</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Elementi nascosti per passare i messaggi flash di Laravel al JavaScript --}}
    {{-- Il JavaScript in app.js leggerà questi data-attributes --}}
    @if (session('success'))
        <div id="successMessageData" data-message="{{ session('success') }}" style="display: none;"></div>
    @endif

    @if ($errors->any())
        <div id="errorMessagesData" data-errors="{{ json_encode($errors->messages()) }}" style="display: none;"></div>
    @endif

</x-main>
