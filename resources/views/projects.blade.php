<x-main title="Progetti - Il Mio Portfolio">

    <main class="py-5 mt-5">
        <div class="container py-5">
            <div class="fade-in">
                <h1 class="mb-5 text-center fw-bold display-4">I Miei Progetti</h1>
                <p class="lead text-center mb-5 mx-auto text-muted" style="max-width: 800px;">
                    Esplora alcuni dei miei lavori recenti. Ogni progetto racconta una storia di innovazione,
                    dedizione e risultati concreti.
                </p>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 fade-in">
                @foreach ($projects as $project)
                    <div class="col">
                        <x-card :item="$project" type="project" />
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-5 py-3 bg-light p-4 rounded-3 shadow-sm fade-in">
                <h2 class="mb-4 fw-bold display-5">Hai un'idea per un nuovo progetto?</h2>
                <p class="lead mb-4 mx-auto text-muted" style="max-width: 800px;">
                    Sono sempre entusiasta di collaborare a nuove iniziative.
                    Trasformiamo la tua visione in realtà.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-success btn-lg"><i class="bi bi-envelope me-2"></i>
                    Contattami per un Progetto</a>
            </div>

        </div>
    </main>

</x-main>
