@props(['item', 'type'])

<div class="card h-100 shadow-sm border-light rounded-3 bg-white">
    <div class="card-body d-flex flex-column text-center p-4">

        <i class="{{ $item['icon'] }} text-primary display-3 mb-3"></i>

        <h5 class="card-title fw-bold fs-4 mb-2 text-primary">{{ $item['nome'] ?? $item['title'] }}</h5>

        <p class="card-text flex-grow-1 text-muted">
            {{ $item['descrizione_short'] ?? $item['description_short'] }}
        </p>

        <div class="mt-auto pt-3 border-top border-light-subtle">
            @if ($type === 'project')
                <a href="{{ route('projects.show', ['project_slug' => $item['slug']]) }}" class="btn btn-sm btn-primary">
                    Dettagli Progetto <i class="bi bi-arrow-right ms-1"></i>
                </a>
            @elseif($type === 'service')
                <a href="{{ route('services.show', ['slug' => $item['slug']]) }}" class="btn btn-sm btn-primary">
                    Scopri di più
                </a>
            @endif
        </div>
    </div>
</div>
