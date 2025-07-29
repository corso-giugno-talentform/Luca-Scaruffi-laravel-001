{{-- resources/views/components/contact-form.blade.php --}}

<div class="card shadow-lg rounded-4 bg-white p-4">
    <div class="card-body">
        <h2 class="card-title fw-bold mb-4 text-center text-primary">Invia un Messaggio</h2>
        {{-- L'attributo action punta alla rotta POST definita in web.php --}}
        <form id="contactForm" action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label fw-semibold">Nome e Cognome</label>
                <input type="text" class="form-control" id="nome" name="nome"
                    placeholder="Il tuo nome completo" required data-minlength="10" data-maxlength="20">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label fw-semibold">Indirizzo Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="la.tua@email.com"
                    required data-minlength="10" data-maxlength="20">
            </div>
            <div class="mb-3">
                <label for="oggetto" class="form-label fw-semibold">Oggetto</label>
                <input type="text" class="form-control" id="oggetto" name="oggetto"
                    placeholder="Es. Richiesta di preventivo, Collaborazione" required data-minlength="10"
                    data-maxlength="20">
            </div>
            <div class="mb-4">
                <label for="messaggio" class="form-label fw-semibold">Messaggio</label>
                <textarea class="form-control" id="messaggio" name="messaggio" rows="6"
                    placeholder="Scrivi qui il tuo messaggio..." required data-minlength="10"></textarea>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg"><i class="bi bi-send-fill me-2"></i> Invia
                    Messaggio</button>
            </div>
        </form>
    </div>
</div>
