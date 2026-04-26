<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <style>
        :root {
            --primary: #4f46e5;
            --primary-hover: #4338ca;
            --bg: #f3f4f6;
            --surface: #ffffff;
            --text-main: #111827;
            --text-muted: #6b7280;
            --border: #d1d5db;
            --error: #ef4444;
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
            box-sizing: border-box;
        }

        .card {
            background-color: var(--surface);
            padding: 2.5rem;
            border-radius: var(--radius);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            width: 100%;
            max-width: 500px;
        }

        .header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .header h1 {
            margin: 0 0 0.5rem 0;
            font-size: 1.5rem;
            color: var(--text-main);
        }

        .header p {
            margin: 0;
            color: var(--text-muted);
            font-size: 0.875rem;
        }

        .form-group {
            margin-bottom: 1.25rem;
        }

        label {
            display: block;
            font-size: 0.875rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        select {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            font-size: 1rem;
            box-sizing: border-box;
            transition: border-color 0.2s;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        .input-error {
            border-color: var(--error) !important;
        }

        .error-msg {
            color: var(--error);
            font-size: 0.75rem;
            margin-top: 0.25rem;
            display: block;
        }

        .checkbox-group {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 0.5rem;
        }

        .checkbox-item {
            display: flex;
            align-items: center;
            gap: 0.375rem;
        }

        .checkbox-item label {
            margin: 0;
            font-weight: 400;
        }

        .btn-submit {
            width: 100%;
            padding: 0.75rem;
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: var(--radius);
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s;
            margin-top: 1rem;
        }

        .btn-submit:hover {
            background-color: var(--primary-hover);
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="header">
            <h1>Formulaire d'inscription</h1>
            <p>Veuillez remplir les champs obligatoires</p>
        </div>

        <form action="/handleForm" method="post">
            @csrf
            
            <div class="form-group">
                <label for="userMatricule">Matricule*</label>
                <input type="text" placeholder="Entrez votre matricule..." name="userMatricule" value="{{ old('userMatricule') }}" class="@error('userMatricule') input-error @enderror">
                @error('userMatricule')
                    <span class="error-msg">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="userName">Nom Complet*</label>
                <input type="text" placeholder="Entrez votre nom complet..." name="userName" value="{{ old('userName') }}" class="@error('userName') input-error @enderror">
                @error('userName')
                    <span class="error-msg">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="userEmail">Email*</label>
                <input type="email" placeholder="Entrez votre E-mail..." name="userEmail" value="{{ old('userEmail') }}" class="@error('userEmail') input-error @enderror">
                @error('userEmail')
                    <span class="error-msg">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="userDate">Date de naissance*</label>
                <input type="date" name="userDate" value="{{ old('userDate') }}" class="@error('userDate') input-error @enderror">
                @error('userDate')
                    <span class="error-msg">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="formation">Formation*</label>
                <select name="formation" class="@error('formation') input-error @enderror">
                    <option value="" disabled {{ old('formation') ? '' : 'selected' }}>Sélectionnez une formation</option>
                    <option value="Developpement Web" @selected(old('formation') == 'Developpement Web')>Developpement Web</option>
                    <option value="IT" @selected(old('formation') == 'IT')>IT</option>
                    <option value="Genie Civil" @selected(old('formation') == 'Genie Civil')>Génie Civil</option>
                </select>
                @error('formation')
                    <span class="error-msg">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label>Modules*</label>
                <div class="checkbox-group">
                    <div class="checkbox-item">
                        <input type="checkbox" name="modules[]" id="HTML" value="HTML" @checked(in_array('HTML', old('modules', [])))>
                        <label for="HTML">HTML</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="modules[]" id="CSS" value="CSS" @checked(in_array('CSS', old('modules', [])))>
                        <label for="CSS">CSS</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="modules[]" id="JavaScript" value="JavaScript" @checked(in_array('JavaScript', old('modules', [])))>
                        <label for="JavaScript">JavaScript</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="modules[]" id="PHP" value="PHP" @checked(in_array('PHP', old('modules', [])))>
                        <label for="PHP">PHP</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" name="modules[]" id="Laravel" value="Laravel" @checked(in_array('Laravel', old('modules', [])))>
                        <label for="Laravel">Laravel</label>
                    </div>
                </div>
                @error('modules')
                    <span class="error-msg">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn-submit">Envoyer l'inscription</button>
        </form>
    </div>

</body>
</html>