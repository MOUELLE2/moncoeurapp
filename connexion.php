<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="connexion.css">
</head>

<body>
    <div class="card">
        <h1>
            Connexion au portail
        </h1>
        <p class="sub">Sélectionner votre role</p>

        <div class="roles">
            <a href="?role=patient" class="active">Patient</a>
            <a href="?role=employe" class="active">Employé</a>
            <a href="?role=medecin" class="active">Médecin</a>
            <a href="?role=admin" class="active">Administrateur</a>
        </div>
        <h2 style="text-align: center;color: #1e3a8a;text-transform: capitalize;">Connexion(role)</h2>
        <form method="POST">
            <label>Email ou Identifiant</label>
            <input type="text" name="email" placeholder="ex: nom@cabinet.cm" required>
            <label>Mot de passe</label>
            <input type="password"  name="password" required>

            <div class="option">
                <label style="display: flex;align-items:center;gap: 5px;margin: 0;font-weight: normal;">
                    <input type="checkbox" name="remember" style="width: auto;">Se souvenir de moi
                </label>
                <a href="#mot-de-passe-oublie">Mot de passe oublié</a>
            </div>

            <button type="submit">Se connecter comme (role)</button>
        </form>
    </div>
</body>

</html>