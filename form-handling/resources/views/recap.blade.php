<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulatif</title>
    <style>
        :root {
            --bg: #f3f4f6;
            --surface: #ffffff;
            --text-main: #111827;
            --text-muted: #6b7280;
            --border: #e5e7eb;
            --radius: 8px;
        }

        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: var(--bg);
            color: var(--text-main);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 2rem 1rem;
        }

        .card {
            background-color: var(--surface);
            padding: 2.5rem;
            border-radius: var(--radius);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        .header {
            text-align: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--border);
        }

        h1 {
            margin: 0 0 0.5rem 0;
            font-size: 1.5rem;
        }

        p.subtitle {
            margin: 0;
            color: var(--text-muted);
            font-size: 0.875rem;
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            padding: 0.75rem 0;
            border-bottom: 1px solid var(--border);
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        .detail-label {
            font-weight: 600;
            color: var(--text-muted);
        }

        .detail-value {
            font-weight: 500;
            text-align: right;
        }

        ul.modules-list {
            margin: 0;
            padding-left: 1.25rem;
            text-align: left;
        }

        .btn-back {
            display: block;
            text-align: center;
            margin-top: 2rem;
            color: #4f46e5;
            text-decoration: none;
            font-weight: 600;
        }
        
        .btn-back:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="header">
            <h1>Détails de l'inscription</h1>
            <p class="subtitle">Voici les informations que vous avez soumises.</p>
        </div>

        <div class="detail-row">
            <span class="detail-label">Matricule</span>
            <span class="detail-value">{{ $valeurs->userMatricule }}</span>
        </div>
        
        <div class="detail-row">
            <span class="detail-label">Nom Complet</span>
            <span class="detail-value">{{ $valeurs->userName }}</span>
        </div>
        
        <div class="detail-row">
            <span class="detail-label">E-mail</span>
            <span class="detail-value">{{ $valeurs->userEmail }}</span>
        </div>
        
        <div class="detail-row">
            <span class="detail-label">Date de naissance</span>
            <span class="detail-value">{{ $valeurs->userDate }}</span>
        </div>
        
        <div class="detail-row">
            <span class="detail-label">Formation choisie</span>
            <span class="detail-value">{{ $valeurs->formation }}</span>
        </div>
        
        <div class="detail-row">
            <span class="detail-label">Modules</span>
            <span class="detail-value">
                <ul class="modules-list">
                    @foreach($valeurs->modules as $val)
                        <li>{{ $val }}</li>
                    @endforeach
                </ul>
            </span>
        </div>

        <a href="/form" class="btn-back">← Retour au formulaire</a>
    </div>

</body>
</html>