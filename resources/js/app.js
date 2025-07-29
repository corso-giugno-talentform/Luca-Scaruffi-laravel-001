// resources/js/app.js

// Importa Bootstrap e le sue dipendenze
import * as bootstrap from 'bootstrap';
// Espone l'oggetto bootstrap globalmente, rendendolo accessibile in altri script (se necessario, ma ora non lo sarà più per gli script inline)
window.bootstrap = bootstrap;

// Importa il file bootstrap.js di Laravel (se stai usando la configurazione predefinita di Laravel Breeze/Jetstream)
import './bootstrap';

// Importa Bootstrap Icons CSS (se non è già gestito da app.css)
import 'bootstrap-icons/font/bootstrap-icons.css';

// --- Logica JavaScript Globale (ex public/js/script.js) ---
document.addEventListener('DOMContentLoaded', () => {

    // Animazione a cascata (fade-in on scroll)
    const fadeElements = document.querySelectorAll('.fade-in');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        rootMargin: '0px 0px -10% 0px' // Avvia l'animazione quando l'elemento è al 90% nel viewport
    });

    fadeElements.forEach(element => {
        observer.observe(element);
    });

    // Logica per la navbar che cambia al scroll
    const navbar = document.getElementById('navbar');
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // --- Logica JavaScript Specifica del Modulo di Contatto (ex resources/views/contact.blade.php script) ---
    const customAlertModalElement = document.getElementById('customAlertModal');
    const contactForm = document.getElementById('contactForm');

    // Solo se il modal e il form esistono sulla pagina corrente (cioè, siamo sulla pagina contatti)
    if (customAlertModalElement && contactForm) {
        const customAlertModal = new bootstrap.Modal(customAlertModalElement);
        const alertTitle = document.getElementById('customAlertModalLabel');
        const alertIcon = document.getElementById('alertIcon');
        const alertMessage = document.getElementById('alertMessage');

        // Funzione per mostrare il modal
        function showAlert(title, iconClass, message) {
            alertTitle.textContent = title;
            alertIcon.className = iconClass;
            alertMessage.textContent = message;
            customAlertModal.show();
        }

        // Funzione di validazione per un singolo campo
        function validateField(field) {
            const value = field.value.trim();
            const fieldName = field.previousElementSibling ? field.previousElementSibling
                .textContent.replace(':', '').trim() : field.name;
            const minLength = field.dataset.minlength ? parseInt(field.dataset.minlength) : 0;
            const maxLength = field.dataset.maxlength ? parseInt(field.dataset.maxlength) : Infinity;

            field.classList.remove('is-invalid', 'is-valid'); // Rimuovi classi precedenti

            if (!value) {
                field.classList.add('is-invalid');
                return `Il campo "${fieldName}" è obbligatorio.`;
            }

            if (value.length < minLength || value.length > maxLength) {
                field.classList.add('is-invalid');
                return `Il campo "${fieldName}" deve contenere tra ${minLength} e ${maxLength} caratteri.`;
            }

            // Validazione specifica per l'email
            if (field.type === 'email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
                field.classList.add('is-invalid');
                return `Il campo "${fieldName}" deve essere un'email valida.`;
            }

            field.classList.add('is-valid');
            return ''; // Nessun errore
        }

        // Aggiungi event listener 'input' per la validazione in tempo reale
        const formFields = contactForm.querySelectorAll('[required]');
        formFields.forEach(field => {
            field.addEventListener('input', function () {
                validateField(this); // Valida il campo corrente
            });
        });

        // Gestione della validazione client-side del form al submit
        contactForm.addEventListener('submit', function (event) {
            let isValid = true;
            let firstErrorMessage = '';

            // Esegui la validazione per tutti i campi al submit
            formFields.forEach(field => {
                const errorMessage = validateField(field);
                if (errorMessage) {
                    isValid = false;
                    if (!firstErrorMessage) {
                        firstErrorMessage = errorMessage;
                    }
                }
            });

            if (!isValid) {
                event.preventDefault(); // Impedisce l'invio del modulo solo se la validazione client-side fallisce
                showAlert(
                    'Errore di Compilazione',
                    'bi bi-exclamation-triangle-fill text-danger',
                    firstErrorMessage || 'Per favor, controlla i campi evidenziati.'
                );
            }
            // Se isValid è true, il modulo verrà inviato normalmente al server.
            // La gestione del successo/errore lato server avverrà tramite i messaggi flash.
        });

        // Gestione dei messaggi flash di Laravel (successo)
        // Questi valori vengono iniettati da Blade nel DOM (vedi contact.blade.php)
        const successMessageElement = document.getElementById('successMessageData');
        if (successMessageElement) {
            const successMessage = successMessageElement.dataset.message;
            if (successMessage) {
                showAlert('Successo!', 'bi bi-check-circle-fill text-success', successMessage);
                // Resetta il form solo dopo un invio riuscito e la visualizzazione del messaggio di successo
                if (contactForm) {
                    contactForm.reset();
                    contactForm.querySelectorAll('.is-valid').forEach(field => {
                        field.classList.remove('is-valid');
                    });
                    contactForm.querySelectorAll('.is-invalid').forEach(field => {
                        field.classList.remove('is-invalid');
                    });
                }
            }
        }

        // Gestione degli errori di validazione di Laravel (lato server)
        const errorMessagesElement = document.getElementById('errorMessagesData');
        if (errorMessagesElement) {
            const errorsJson = errorMessagesElement.dataset.errors;
            if (errorsJson) {
                const errors = JSON.parse(errorsJson);
                let errorMessages = '';
                for (const fieldName in errors) {
                    if (errors.hasOwnProperty(fieldName)) {
                        errorMessages += errors[fieldName].join('\n') + '\n';
                    }
                }
                showAlert('Errore di Validazione', 'bi bi-exclamation-triangle-fill text-danger', errorMessages);

                // Applica la classe is-invalid ai campi che hanno errori dal server
                for (const fieldName in errors) {
                    if (errors.hasOwnProperty(fieldName)) {
                        const fieldElement = document.getElementById(fieldName);
                        if (fieldElement) {
                            fieldElement.classList.add('is-invalid');
                        }
                    }
                }
            }
        }
    }
});
