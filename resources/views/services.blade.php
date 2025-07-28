<x-main title="Servizi - Il Mio Portfolio">
    <main class="py-5 mt-5">
        <div class="container py-5">
            <div class="fade-in">
                <h1 class="mb-5 text-center fw-bold display-4">I Miei Servizi</h1>
                <p class="lead text-center mb-5 mx-auto text-muted" style="max-width: 800px;">
                    Offro una gamma completa di servizi digitali, progettati per aiutare la tua attività a crescere e a
                    distinguersi online.
                </p>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 fade-in">
                @foreach ($services as $service)
                    <div class="col">
                        <x-card :item="$service" type="service" />
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-5 py-3 bg-light p-4 rounded-3 shadow-sm fade-in">
                <h2 class="mb-4 fw-bold display-5">Non sai quale servizio fa per te?</h2>
                <p class="lead mb-4 mx-auto text-muted" style="max-width: 800px;">
                    Contattami per una consulenza gratuita e personalizzata. Troveremo insieme la soluzione migliore per
                    le
                    tue esigenze.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-success btn-lg"><i class="bi bi-chat-dots me-2"></i>
                    Contattami per una Consulenza</a>
            </div>
        </div>
    </main>
</x-main>
