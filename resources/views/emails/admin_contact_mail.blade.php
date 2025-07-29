<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuovo Messaggio dal Portfolio</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #2F3C48;
            /* Colore primary della nuova palette */
            color: #ffffff;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }

        .content {
            padding: 20px;
        }

        .footer {
            text-align: center;
            padding: 20px;
            font-size: 0.9em;
            color: #8D99AE;
            /* Colore secondary della nuova palette */
            border-top: 1px solid #eeeeee;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Nuovo Messaggio dal Portfolio</h2>
        </div>
        <div class="content">
            <p>Hai ricevuto un nuovo messaggio tramite il modulo di contatto del tuo portfolio.</p>
            <p><strong>Dettagli del Messaggio:</strong></p>
            <ul>
                <li><strong>Nome:</strong> {{ $userName }}</li>
                <li><strong>Email:</strong> {{ $userEmail }}</li>
                <li><strong>Oggetto:</strong> {{ $userSubject }}</li>
                <li><strong>Messaggio:</strong> {{ $userMessage }}</li>
            </ul>
            <p>Rispondi a questa email per contattare direttamente {{ $userName }}.</p>
        </div>
        <div class="footer">
            <p>Questo è un messaggio automatico inviato dal tuo portfolio.</p>
        </div>
    </div>
</body>

</html>
