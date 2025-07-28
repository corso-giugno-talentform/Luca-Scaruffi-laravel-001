<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Dati di tutti i progetti
    private static $allProjectsData = [
        'piattaforma-di-ecommerce' => [
            'id' => 1,
            'slug' => 'piattaforma-di-ecommerce',
            'nome' => 'Piattaforma E-commerce Personalizzata',
            'descrizione_short' => 'Una piattaforma per vendere prodotti online con pagamento integrato.',
            'descrizione_long' => 'Questa è una descrizione estesa della Piattaforma di eCommerce, che include dettagli sulle funzionalità avanzate, sulle tecnologie utilizzate e sui benefici per il cliente. Spiegherà come la piattaforma gestisce i pagamenti, l\'inventario, la spedizione e l\'esperienza utente. Il progetto ha mirato a creare un\'esperienza di acquisto fluida e sicura, con un backend robusto per la gestione completa del negozio.',
            'tecnologie' => ['Laravel', 'Vue.js', 'MySQL', 'Stripe API', 'Tailwind CSS'],
            'image' => 'https://via.placeholder.com/1200x600?text=IMMAGINE+PROGETTO',
            'link_demo' => '#',
            'link_github' => 'https://github.com/tuo-profilo/ecommerce-platform',
            'anno' => 2023,
            'icon' => 'bi-cart-fill',
            'cliente' => 'ABC Solutions S.p.A.',
            'obiettivi_risultati' => [
                'Obiettivo 1: Realizzare una piattaforma scalabile per l\'e-commerce.',
                'Risultato 1: Aumento del 30% delle vendite nel primo trimestre.',
                'Obiettivo 2: Ottimizzare l\'esperienza utente per i dispositivi mobili.',
                'Risultato 2: Riduzione del tasso di abbandono del carrello del 15%.'
            ],
            'galleria_immagini' => [
                'https://via.placeholder.com/800x600?text=Ecommerce+Screenshot+1',
                'https://via.placeholder.com/800x600?text=Ecommerce+Screenshot+2',
                'https://via.placeholder.com/800x600?text=Ecommerce+Screenshot+3'
            ],
        ],
        'applicazione-per-task' => [
            'id' => 2,
            'slug' => 'applicazione-per-task',
            'nome' => 'App Web per la Gestione Task Avanzata',
            'descrizione_short' => 'Un’app per organizzare e monitorare le attività giornaliere.',
            'descrizione_long' => 'L\'Applicazione per Task è uno strumento intuitivo progettato per migliorare la produttività personale e di team. Offre funzionalità come la creazione di liste di attività, l\'assegnazione di priorità, promemoria personalizzabili, e integrazione con calendari. Focus sull\'interfaccia utente pulita e sull\'esperienza mobile-first. Il progetto ha implementato notifiche in tempo reale e funzionalità drag-and-drop per una gestione intuitiva delle attività.',
            'tecnologie' => ['Node.js', 'React', 'MongoDB', 'Socket.IO'],
            'image' => 'https://via.placeholder.com/1200x600?text=IMMAGINE+PROGETTO',
            'link_demo' => '#',
            'link_github' => 'https://github.com/tuo-profilo/task-manager-app',
            'anno' => 2024,
            'icon' => 'bi-check2-square',
            'cliente' => 'Startup Digitale SRL',
            'obiettivi_risultati' => [
                'Obiettivo 1: Migliorare l\'efficienza nella gestione delle attività.',
                'Risultato 1: Feedback positivi dagli utenti sull\'intuitività.',
                'Obiettivo 2: Implementare notifiche push in tempo reale.',
                'Risultato 2: Aumento dell\'engagement degli utenti del 25%.'
            ],
            'galleria_immagini' => [
                'https://via.placeholder.com/800x600?text=TaskApp+Screenshot+1',
                'https://via.placeholder.com/800x600?text=TaskApp+Screenshot+2'
            ],
        ],
        'software-gestionali' => [
            'id' => 3,
            'slug' => 'software-gestionali',
            'nome' => 'Sistema di Gestione Contenuti (CMS) Personalizzato',
            'descrizione_short' => 'Strumenti per automatizzare la contabilità e la gestione aziendale.',
            'descrizione_long' => 'I Software Gestionali sono soluzioni personalizzate per ottimizzare i processi aziendali, dalla contabilità alla gestione delle risorse umane, dall\'inventario alla fatturazione. Sviluppati per essere scalabili e sicuri, questi software riducono gli errori manuali e aumentano l\'efficienza operativa. Particolare attenzione alla reportistica e all\'integrazione con sistemi esistenti. Questo CMS è stato progettato per offrire massima flessibilità nella creazione e gestione dei contenuti digitali.',
            'tecnologie' => ['Python', 'Django', 'PostgreSQL', 'Docker'],
            'image' => 'https://via.placeholder.com/1200x600?text=IMMAGINE+PROGETTO',
            'link_demo' => '#',
            'link_github' => 'https://github.com/tuo-profilo/custom-cms',
            'anno' => 2022,
            'icon' => 'bi-file-earmark-richtext-fill',
            'cliente' => 'Azienda X Holding',
            'obiettivi_risultati' => [
                'Obiettivo 1: Semplificare la gestione dei contenuti.',
                'Risultato 1: Riduzione del tempo di pubblicazione dei contenuti del 40%.',
                'Obiettivo 2: Migliorare la sicurezza dei dati.',
                'Risultato 2: Nessuna violazione della sicurezza rilevata dopo il lancio.'
            ],
            'galleria_immagini' => [
                'https://via.placeholder.com/800x600?text=CMS+Screenshot+1',
                'https://via.placeholder.com/800x600?text=CMS+Screenshot+2'
            ],
        ],
        'app-mobile-eventi' => [
            'id' => 4,
            'slug' => 'app-mobile-eventi',
            'nome' => 'App Mobile Ibrida per Eventi',
            'descrizione_short' => 'Creazione di un\'applicazione mobile cross-platform per la gestione di eventi.',
            'descrizione_long' => 'Questa app mobile ibrida è stata sviluppata per semplificare la gestione e la partecipazione agli eventi. Include funzionalità di registrazione degli utenti, creazione di agende personalizzate, notifiche push per aggiornamenti in tempo reale e una mappa interattiva per la navigazione. L\'obiettivo era fornire un\'esperienza utente fluida e completa su iOS e Android.',
            'tecnologie' => ['React Native', 'Firebase', 'Expo'],
            'image' => 'https://via.placeholder.com/1200x600?text=IMMAGINE+PROGETTO',
            'link_demo' => '#',
            'link_github' => 'https://github.com/tuo-profilo/event-mobile-app',
            'anno' => 2023,
            'icon' => 'bi-phone-fill',
            'cliente' => 'Eventi Facili S.R.L.',
            'obiettivi_risultati' => [
                'Obiettivo 1: Migliorare l\'esperienza degli utenti durante gli eventi.',
                'Risultato 1: Aumento del 50% di engagement degli utenti durante l\'evento.',
                'Obiettivo 2: Gestire le registrazioni in modo efficiente.',
                'Risultato 2: Riduzione del 20% dei tempi di check-in.'
            ],
            'galleria_immagini' => [
                'https://via.placeholder.com/800x600?text=EventApp+Screenshot+1',
                'https://via.placeholder.com/800x600?text=EventApp+Screenshot+2',
                'https://via.placeholder.com/800x600?text=EventApp+Screenshot+3'
            ],
        ],
        'dashboard-analitica' => [
            'id' => 5,
            'slug' => 'dashboard-analitica',
            'nome' => 'Dashboard Analitica Interattiva',
            'descrizione_short' => 'Sviluppo di una dashboard per visualizzare dati complessi in modo chiaro e interattivo.',
            'descrizione_long' => 'La dashboard analitica è stata creata per permettere agli utenti di visualizzare e interpretare grandi volumi di dati in modo intuitivo. Utilizzando librerie di visualizzazione avanzate, offre grafici interattivi, filtri personalizzabili e reportistica dettagliata, aiutando a prendere decisioni basate sui dati in modo rapido ed efficace. Il focus è sull\'usabilità e sulla chiarezza visiva.',
            'tecnologie' => ['Angular', 'D3.js', 'Chart.js', 'REST API'],
            'image' => 'https://via.placeholder.com/1200x600?text=IMMAGINE+PROGETTO',
            'link_demo' => '#',
            'link_github' => 'https://github.com/tuo-profilo/analytics-dashboard',
            'anno' => 2024,
            'icon' => 'bi-graph-up-arrow',
            'cliente' => 'Data Insight Labs',
            'obiettivi_risultati' => [
                'Obiettivo 1: Fornire una visione chiara delle metriche chiave.',
                'Risultato 1: Tempi di analisi dei dati ridotti del 70%.',
                'Obiettivo 2: Supportare decisioni strategiche basate sui dati.',
                'Risultato 2: Aumento della precisione nelle previsioni aziendali.'
            ],
            'galleria_immagini' => [
                'https://via.placeholder.com/800x600?text=Dashboard+Screenshot+1',
                'https://via.placeholder.com/800x600?text=Dashboard+Screenshot+2'
            ],
        ],
        'sistema-prenotazione-online' => [
            'id' => 6,
            'slug' => 'sistema-prenotazione-online',
            'nome' => 'Sistema di Prenotazione Online',
            'descrizione_short' => 'Realizzazione di una piattaforma per la gestione delle prenotazioni di servizi o appuntamenti.',
            'descrizione_long' => 'Questo sistema di prenotazione online offre una soluzione completa per aziende e professionisti che necessitano di gestire appuntamenti o risorse. Include un calendario interattivo, gestione della disponibilità, notifiche automatiche via email/SMS e un pannello di amministrazione per il controllo completo. Progettato per essere flessibile e integrabile con altri sistemi.',
            'tecnologie' => ['PHP', 'Symfony', 'MySQL', 'jQuery'],
            'image' => 'https://via.placeholder.com/1200x600?text=IMMAGINE+PROGETTO',
            'link_demo' => '#',
            'link_github' => 'https://github.com/tuo-profilo/online-booking-system',
            'anno' => 2022,
            'icon' => 'bi-calendar-check-fill',
            'cliente' => 'Prenota Facile SRL',
            'obiettivi_risultati' => [
                'Obiettivo 1: Semplificare il processo di prenotazione per gli utenti.',
                'Risultato 1: Aumento del 20% delle prenotazioni online.',
                'Obiettivo 2: Fornire un pannello di gestione intuitivo per gli amministratori.',
                'Risultato 2: Riduzione del carico di lavoro amministrativo del 30%.'
            ],
            'galleria_immagini' => [
                'https://via.placeholder.com/800x600?text=Booking+Screenshot+1',
                'https://via.placeholder.com/800x600?text=Booking+Screenshot+2',
                'https://via.placeholder.com/800x600?text=Booking+Screenshot+3'
            ],
        ],
    ];

    // Dati di tutti i servizi
    private static $allServicesData = [
        'comunicazione-strategica' => [
            'title' => 'Comunicazione Strategica',
            'icon' => 'bi-megaphone',
            'description_short' => 'Sviluppo di strategie di comunicazione digitale efficaci per raggiungere il tuo pubblico e rafforzare il tuo brand.',
            'description_long' => 'Il servizio di Comunicazione Strategica è fondamentale per costruire e mantenere una presenza online forte, coerente e risonante con il tuo brand. Ti aiuto a definire il tuo messaggio chiave, identificare il tuo pubblico di riferimento e scegliere i canali più efficaci per veicolarlo. Che si tratti di content marketing, gestione social media, redazione di testi persuasivi o campagne di brand awareness, la mia expertise ti guiderà verso una comunicazione mirata e di successo. L\'obiettivo è creare una narrazione che catturi l\'attenzione e trasformi gli spettatori in clienti fedeli.',
            'includes' => [
                'Analisi e definizione dettagliata del target e della buyer persona.',
                'Creazione di piani editoriali personalizzati per blog, newsletter e social media.',
                'Copywriting persuasivo e ottimizzato SEO per siti web, articoli e materiali di marketing.',
                'Gestione e ottimizzazione dei canali digitali e campagne di comunicazione.',
                'Monitoraggio delle performance e reporting per l\'ottimizzazione continua.'
            ],
            'image' => 'https://via.placeholder.com/1200x600?text=Comunicazione+Strategica'
        ],
        'sviluppo-website-e-web-app' => [
            'title' => 'Sviluppo Website e Web App',
            'icon' => 'bi-globe',
            'description_short' => 'Realizzazione di siti web moderni, responsive e performanti. Dalle semplici landing page a complesse applicazioni web personalizzate.',
            'description_long' => 'Lo Sviluppo Website e Web App è il fondamento della tua presenza digitale. Creo soluzioni robuste, scalabili e facili da usare che generano risultati concreti. Dalla progettazione dell\'architettura alla scelta delle tecnologie più adatte (Laravel, React, Vue.js, Node.js, ecc.), mi occupo di ogni fase dello sviluppo. Il risultato è un sito o un\'applicazione web non solo belli da vedere, ma anche ottimizzati per performance, sicurezza, accessibilità e usabilità su ogni dispositivo e browser. Mi concentro sulla creazione di un\'esperienza utente impeccabile.',
            'includes' => [
                'Sviluppo Frontend completo (HTML, CSS, JavaScript, React/Vue.js) per interfacce dinamiche.',
                'Sviluppo Backend robusto (PHP con Laravel, Node.js con Express, Python con Django) per logiche complesse.',
                'Integrazione database (MySQL, PostgreSQL, MongoDB) e API di terze parti (es. sistemi di pagamento).',
                'Ottimizzazione della performance (velocità di caricamento) e implementazione di misure di sicurezza avanzate.',
                'Garanzia di responsive design per una visualizzazione perfetta su desktop, tablet e smartphone.'
            ],
            'image' => 'https://via.placeholder.com/1200x600?text=Sviluppo+Website+e+Web+App'
        ],
        'consulenza-e-ottimizzazione' => [
            'title' => 'Consulenza e Ottimizzazione',
            'icon' => 'bi-lightbulb',
            'description_short' => 'Analisi approfondita del tuo ecosistema digitale e consulenza per migliorare le performance, l\'esperienza utente (UX) e il posizionamento SEO.',
            'description_long' => 'La Consulenza e Ottimizzazione ti offre una guida esperta per migliorare la tua strategia digitale esistente o pianificare futuri investimenti con cognizione di causa. Attraverso un\'analisi approfondita del tuo attuale ecosistema digitale, ti fornirò raccomandazioni pratiche e attuabili per ottimizzare la tua presenza online. Questo include consigli su SEO, UX/UI, marketing digitale, infrastruttura tecnologica e l\'adozione delle migliori pratiche del settore. L\'obiettivo è massimizzare il tuo ritorno sull\'investimento digitale e identificare aree di crescita.',
            'includes' => [
                'Analisi SEO completa e sviluppo di strategie per migliorare il posizionamento sui motori di ricerca.',
                'Audit UX/UI e raccomandazioni per migliorare l\'usabilità, l\'accessibilità e la soddisfazione dell\'utente.',
                'Pianificazione e strategia di marketing digitale per campagne efficaci su diversi canali.',
                'Ottimizzazione delle conversioni (CRO) e analisi dei dati per prendere decisioni informate.',
                'Valutazione dell\'infrastruttura tecnologica e consigli per la scalabilità e l\'efficienza.'
            ],
            'image' => 'https://via.placeholder.com/1200x600?text=Consulenza+e+Ottimizzazione'
        ],
        'grafica-e-ui-ux-design' => [
            'title' => 'Grafica e UI/UX Design',
            'icon' => 'bi-palette',
            'description_short' => 'Creazione di interfacce utente intuitive e accattivanti, con un focus sull\'esperienza utente (UX) e un design visivamente impattante.',
            'description_long' => 'Il servizio di Grafica e UI/UX Design si concentra sulla creazione di esperienze digitali che non solo catturano l\'attenzione visiva, ma sono anche incredibilmente intuitive e facili da usare. Ogni elemento di design è pensato per guidare l\'utente e rendere la navigazione fluida e piacevole. Lavoro a stretto contatto con te per trasformare le tue idee in prototipi interattivi e design finali che riflettono l\'identità del tuo brand e superano le aspettative degli utenti. Il mio obiettivo è creare interfacce che deliziano e convertono.',
            'includes' => [
                'Ricerca utente e analisi dei competitor per informare le decisioni di design.',
                'Creazione di wireframe e prototipi interattivi per visualizzare il flusso utente.',
                'Design di interfacce utente (UI) pulite, moderne e responsive.',
                'Test di usabilità (UX) per garantire un\'esperienza utente ottimale.',
                'Definizione di design system e linee guida per la coerenza del brand.'
            ],
            'image' => 'https://via.placeholder.com/1200x600?text=Grafica+UI%2FUX+Design'
        ],
        'seo-e-sem-marketing' => [
            'title' => 'SEO e SEM Marketing',
            'icon' => 'bi-bar-chart-fill',
            'description_short' => 'Ottimizzazione per i motori di ricerca (SEO) e gestione di campagne di marketing a pagamento (SEM) per aumentare la visibilità online.',
            'description_long' => 'Il servizio di SEO e SEM Marketing è progettato per massimizzare la tua visibilità sui motori di ricerca e attrarre traffico qualificato al tuo sito web. Attraverso strategie SEO on-page e off-page, migliorerò il posizionamento organico del tuo sito per le parole chiave più rilevanti. Parallelamente, gestirò campagne pubblicitarie a pagamento (SEM, Google Ads, social media ads) mirate a raggiungere il tuo pubblico ideale, ottimizzando il budget e massimizzando il ritorno sull\'investimento. L\'obiettivo è generare lead e vendite attraverso una presenza online dominante.',
            'includes' => [
                'Analisi delle parole chiave e della concorrenza per identificare opportunità.',
                'Ottimizzazione tecnica SEO del sito (velocità, struttura URL, mobile-friendliness).',
                'Creazione di contenuti ottimizzati SEO e link building.',
                'Pianificazione, esecuzione e monitoraggio di campagne Google Ads e Social Media Ads.',
                'Reporting dettagliato sulle performance SEO/SEM e raccomandazioni per la crescita.'
            ],
            'image' => 'https://via.placeholder.com/1200x600?text=SEO+e+SEM+Marketing'
        ],
        'sicurezza-e-performance' => [
            'title' => 'Sicurezza e Performance',
            'icon' => 'bi-shield-lock-fill',
            'description_short' => 'Audit e implementazione di misure di sicurezza avanzate e ottimizzazione delle performance per un sito web veloce e protetto da minacce.',
            'description_long' => 'Il servizio di Sicurezza e Performance assicura che il tuo sito web non sia solo veloce e reattivo, ma anche robusto contro le minacce informatiche. Effettuo audit completi per identificare vulnerabilità e colli di bottiglia, implementando soluzioni come certificati SSL, firewall, backup automatici e aggiornamenti regolari del software. Per le performance, ottimizo il codice, le immagini, il database e la configurazione del server per garantire tempi di caricamento minimi e un\'esperienza utente fluida. Un sito sicuro e performante è cruciale per la reputazione e il successo online.',
            'includes' => [
                'Analisi di sicurezza e scansione delle vulnerabilità.',
                'Implementazione di certificati SSL/TLS e configurazione firewall.',
                'Backup regolari e piani di ripristino in caso di incidenti.',
                'Ottimizzazione della velocità del sito (cache, compressione, ottimizzazione immagini).',
                'Monitoraggio proattivo e report sulla sicurezza e le performance.'
            ],
            'image' => 'https://via.placeholder.com/1200x600?text=Sicurezza+e+Performance'
        ],
    ];

    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function projectsIndex()
    {
        $projectsList = [];
        foreach (self::$allProjectsData as $slug => $data) {
            $projectsList[] = [
                'id' => $data['id'],
                'slug' => $slug,
                'nome' => $data['nome'],
                'descrizione_short' => $data['descrizione_short'],
                'image' => $data['image'],
                'icon' => $data['icon']
            ];
        }
        return view('projects', ['projects' => $projectsList]);
    }

    public function projectShow($project_slug)
    {
        $project = self::$allProjectsData[$project_slug] ?? null;

        if (!$project) {
            abort(404, 'Progetto non trovato');
        }

        $projectData = [
            'id' => $project['id'],
            'slug' => $project['slug'],
            'nome' => $project['nome'],
            'descrizione_short' => $project['descrizione_short'],
            'descrizione_long' => $project['descrizione_long'],
            'tecnologie' => $project['tecnologie'],
            'image' => $project['image'],
            'link_demo' => $project['link_demo'] ?? null,
            'link_github' => $project['link_github'] ?? null,
            'anno' => $project['anno'],
            'icon' => $project['icon'],
            'cliente' => $project['cliente'] ?? 'Non specificato',
            'obiettivi_risultati' => $project['obiettivi_risultati'] ?? [],
            'galleria_immagini' => $project['galleria_immagini'] ?? [],
        ];


        return view('project', ['project' => $projectData]);
    }

    public function servicesIndex()
    {
        $servicesList = [];
        foreach (self::$allServicesData as $slug => $data) {
            $servicesList[] = [
                'slug' => $slug,
                'title' => $data['title'],
                'icon' => $data['icon'],
                'description_short' => $data['description_short']
            ];
        }
        return view('services', ['services' => $servicesList]);
    }

    public function serviceShow($slug)
    {
        $service = self::$allServicesData[$slug] ?? null;

        if (!$service) {
            abort(404, 'Servizio non trovato');
        }

        $serviceData = [
            'title' => $service['title'],
            'icon' => $service['icon'],
            'description_short' => $service['description_short'],
            'description_long' => $service['description_long'],
            'includes' => $service['includes'] ?? [],
            'image' => $service['image'] ?? null,
        ];

        return view('service', ['service' => $serviceData]);
    }
}
