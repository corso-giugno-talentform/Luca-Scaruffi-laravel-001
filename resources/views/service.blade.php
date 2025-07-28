<x-main title="Dettagli Servizio: {{ $service['title'] }} - Il Mio Portfolio">

    <main class="py-5 mt-5">
        <div class="container py-5">
            <div class="fade-in">
                <h1 class="mb-5 text-center fw-bold display-4">Dettagli Servizio: {{ $service['title'] }}</h1>
            </div>

            <div class="row justify-content-center mb-5 fade-in">
                <div class="col-lg-10">
                    <div class="card shadow-lg border-light rounded-3 bg-white">
                        <img src="{{ $service['image'] }}" class="card-img-top object-fit-cover rounded-top-3"
                            alt="Immagine Servizio {{ $service['title'] }}" style="height: 400px;">

                        <div class="card-body p-5">
                            <h2 class="card-title fw-bold mb-3 text-center text-primary">{{ $service['title'] }}</h2>
                            <p class="lead mb-4 text-dark text-center">
                                {{ $service['description_long'] }}
                            </p>

                            @if (!empty($service['includes']))
                                <h3 class="fw-bold mb-3 text-primary mt-5">Cosa Offro:</h3>
                                <ul class="list-group list-group-flush mb-4">
                                    @foreach ($service['includes'] as $item)
                                        <li
                                            class="list-group-item bg-transparent border-0 d-flex align-items-center py-2">
                                            <i class="bi bi-check-circle-fill text-success me-3 fs-5"></i>
                                            <span class="text-dark">{{ $item }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif

                            <div class="text-center mt-5 py-3 bg-light p-4 rounded-3 shadow-sm">
                                <h2 class="mb-4 fw-bold display-5">Pronto a Iniziare?</h2>
                                <p class="lead mb-4 mx-auto text-muted" style="max-width: 800px;">
                                    Discutiamo di come questo servizio possa aiutarti a raggiungere i tuoi obiettivi.
                                </p>
                                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg"><i
                                        class="bi bi-chat-dots me-2"></i> Richiedi una Consulenza</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4 fade-in">
                <a href="{{ route('services.index') }}" class="btn btn-outline-dark btn-lg"><i
                        class="bi bi-arrow-left me-2"></i> Torna ai Servizi</a>
            </div>
        </div>
    </main>

</x-main>
