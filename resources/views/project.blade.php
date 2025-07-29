<x-main title="Dettagli Progetto: {{ $project['nome'] }} - Il Mio Portfolio">

    <main class="py-5 mt-5">
        <div class="container py-5">
            <div class="fade-in">
                <h1 class="mb-5 text-center fw-bold display-4">Dettagli Progetto: {{ $project['nome'] }}</h1>
            </div>

            <div class="row justify-content-center mb-5 fade-in">
                <div class="col-lg-10">
                    <div class="card shadow-lg rounded-4 bg-white">
                        <img src="{{ $project['image'] }}" class="card-img-top object-fit-cover rounded-top-4"
                            alt="Immagine Progetto {{ $project['nome'] }}" style="height: 400px;">
                        <div class="card-body p-5">
                            <h2 class="card-title fw-bold mb-3 text-primary">{{ $project['nome'] }}</h2>
                            <p class="lead mb-4 text-dark">
                                {{ $project['descrizione_long'] }}
                            </p>

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <p class="mb-1 fw-bold text-muted">Cliente:</p>
                                    <p class="fs-5 text-dark">{{ $project['cliente'] }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="mb-1 fw-bold text-muted">Anno:</p>
                                    <p class="fs-5 text-dark">{{ $project['anno'] }}</p>
                                </div>
                            </div>

                            @if (!empty($project['tecnologie']))
                                <h3 class="fw-bold mb-3 text-primary">Tecnologie Utilizzate:</h3>
                                <div class="mb-4">
                                    @foreach ($project['tecnologie'] as $tech)
                                        <span class="badge bg-primary text-white me-2 mb-2 p-2 fs-6">
                                            {{ $tech }}
                                        </span>
                                    @endforeach
                                </div>
                            @endif

                            @if (!empty($project['link_demo']) || !empty($project['link_github']))
                                <h3 class="fw-bold mb-3 text-primary">Link Utili:</h3>
                                <div class="d-flex flex-wrap gap-3 mb-4">
                                    @if (!empty($project['link_demo']))
                                        <a href="{{ $project['link_demo'] }}" target="_blank"
                                            class="btn btn-outline-primary btn-lg"><i
                                                class="bi bi-box-arrow-up-right me-2"></i>
                                            Visita il Sito</a>
                                    @endif
                                    @if (!empty($project['link_github']))
                                        <a href="{{ $project['link_github'] }}" target="_blank"
                                            class="btn btn-outline-dark btn-lg"><i class="bi bi-github me-2"></i>
                                            Codice su GitHub</a>
                                    @endif
                                </div>
                            @endif

                            @if (!empty($project['obiettivi_risultati']))
                                <h3 class="fw-bold mb-3 text-primary mt-5">Obiettivi e Risultati:</h3>
                                <ul class="list-unstyled text-muted">
                                    @foreach ($project['obiettivi_risultati'] as $obiettivo)
                                        <li><i class="bi bi-check-circle-fill me-2 text-success"></i>
                                            {{ $obiettivo }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            @if (!empty($project['galleria_immagini']))
                                <h3 class="fw-bold mb-4 text-primary mt-5">Galleria Immagini:</h3>
                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    @foreach ($project['galleria_immagini'] as $gallery_image)
                                        <div class="col">
                                            <div class="card shadow-sm rounded-4">
                                                <img src="{{ $gallery_image }}"
                                                    class="card-img-top object-fit-cover rounded-4"
                                                    alt="Galleria Immagine Progetto {{ $project['nome'] }}"
                                                    style="height: 250px;">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4 py-5 section-bg-light p-4 rounded-4 shadow-sm fade-in">
                <h2 class="mb-4 fw-bold display-5">Ti è piaciuto questo progetto?</h2>
                <p class="lead mb-4 mx-auto text-muted" style="max-width: 800px;">
                    Se sei interessato a un progetto simile o hai una tua idea da sviluppare, non esitare a contattarmi!
                </p>
                <a href="{{ route('projects.index') }}" class="btn btn-outline-dark btn-lg me-3"><i
                        class="bi bi-arrow-left me-2"></i> Torna
                    ai Progetti</a>
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg"><i class="bi bi-chat-dots me-2"></i>
                    Contattami per un Progetto</a>
            </div>
        </div>
    </main>

</x-main>
