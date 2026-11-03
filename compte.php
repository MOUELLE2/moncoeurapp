<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation de compte</title>
    <link rel="stylesheet" href="compte.css">
</head>

<body>
    <div id="page">
        <nav>
            <h1>Cabinet Médical ➕</h1>
        </nav>
        <main><a href="index.php" class="cmpt"><b>
                    < Créer votre compte</b> </a><br><br><small>Rejoignez le cabinet Médical en quelque instants</small>
            <form><br><label><b>Nom complet</b></label><br><input type="text" name="texte"
                    placeholder="Entrez votre nom complet" required><br><br><label><b>Email</b></label><br><input
                    type="email" name="email" placeholder="exemple@email.com" required><br><br><label><b>Mot de
                        passe</b></label><br><input type="password" name="mot de passe" placeholder="......"
                    required><br><br><label><b>Confirmer le mot de passe</b></label><br><input type="password"
                    name="mot de passe" placeholder="......" required><br><br><button type="submit">Créer votre compte
                    ></button> </form><br>
            <p>Dejà un compte ?' <a href="connexion.php" class="connecter"><b>Se connecter</b></a></p><br><small
                id="">Vos données sont protegées et sécurisées</small>
        </main>
    </div>

</body>

</html>