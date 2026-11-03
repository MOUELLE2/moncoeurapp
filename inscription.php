<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inscription.css">
</head>

<body>
    <main>
        <nav>
            Cabinet Médical <small>securité SSL</small>
        </nav>
        <div class="inscription">
            <h1>Inscription Patient</h1>
            Créez votre compte pour accéder à la cabine médicale et suivre vos consultations<br>
            <small>Vos information sont protégées et confidentielles</small>
        </div><br>
        <form>
            <div class="btn">
                <div>
                    <label>
                        Nom
                    </label><br>
                    <input type="text" name="nom" required>
                </div>
                <div>
                    <label>
                        Pénom
                    </label><br>
                    <input type="text" name="nom" required>
                </div>

            </div>
            <div class="input">
                <input type="email" name="email" placeholder="exemple@gmail.com" required><br>
                <input type="tel" name="telephone" placeholder="+237 00 00 00 00" required><br>
                <input type="password" name="mot de passe" placeholder="Mot de passe" required>
            </div>
            <div class="politique">
                <input type="checkbox">J'accepte les <a href="#condition">condition d'utilisation</a> et la <a
                    href="#politique">politique de confidentialité</a><br>
            </div><br>
            <button type="submit">S'incrire ></button>
            <div class="lien">
                Déjà un compte ? <a href="connexion.php">Se connecter</a>
            </div>
        </form>
    </main>
</body>

</html>