<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferma Messaggio - Il Mio Portfolio</title>
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

        .button {
            display: inline-block;
            background-color: #4CAF50;
            /* Colore accent della nuova palette */
            color: #ffffff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Grazie per il tuo messaggio, {{ $userName }}!</h2>
        </div>
        <div class="content">
            <p>Abbiamo ricevuto il tuo messaggio tramite il portfolio. Ti risponderemo il prima possibile.</p>
            <p>Ecco un riepilogo del tuo messaggio:</p>
            <ul>
                <li><strong>Nome:</strong> {{ $userName }}</li>
                <li><strong>Email:</strong> {{ $userEmail }}</li>
                <li><strong>Oggetto:</strong> {{ $userSubject }}</li>
                <li><strong>Messaggio:</strong> {{ $userMessage }}</li>
            </ul>
            <p>Nel frattempo, puoi visitare il mio portfolio per esplorare altri progetti:</p>
            <p style="text-align: center;">
                <a href="{{ url('/') }}" class="button">Visita il Portfolio</a>
            </p>
            <p>A presto!</p>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Il Mio Portfolio. Tutti i diritti riservati.</p>
        </div>
    </div>
</body>

</html>
