<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    <link rel="stylesheet" href="site/css/normalize.css">
    <link rel="stylesheet" href="site/css/style.css">
    <title>Afrique Partenaires</title>
</head>
<body>
    <div class="container">
        <div class="title">
            <span class='space'></span>
            <a href='#index' class='nobutton'><img src="site/css/image/logo.svg" alt="logo de afrique partenaire représentant un arbre avec le nom de l'association dans le tronc" class='logo'></a>
            <h1>Afrique Partenaires</h1>
            <span class='space'></span>
        </div> <!-- fin title-->
        <nav>            
            <a href='#index'>Accueil</a>
            <a href='#connexion'>Connexion</a>       
        </nav><!-- fin nav-->
        <div class="main">
            <p class="center" >page actuelle : 1</p>
            <h2>Créez votre compte</h2>
            <form action="#record" method="post">
                <label for="recordNumber">Votre Numéro d'adhérent
                    <input type="text" name="recordNumber" id="recordNumber" placeholder="x597554514548">
                </label></br>
                <label for="mail">Votre Adresse e-mail
                    <input type="email" name="mail" id="mail" placeholder="toto@g.fr">
                </label></br>
                <label for="password">Un mot de passe
                    <input type="password" name="mail" id="mail" minlength="6" placeholder="Au minimum 6 caractères">
                </label></br>
                <label for="name">Votre Nom
                    <input type="text" name="name" id="name">
                </label></br>
                <label for="firstname">Votre Prénom
                    <input type="text" name="firstname" id="firstname">
                </label></br>
                <label for="steet">Votre qdresse postale
                    <input type="text" name="street" id="street">
                </label></br>
                <label for="zipcode">Votre code postal
                    <input type="text" name="zipcode" id="zipcode">
                </label></br>
                <label for="city">Votre ville de résidence
                    <input type="text" name="city" id="city">
                </label></br>
                <label for="phone">Votre numéro de téléphone
                    <input type="text" name="phone" id="phone" minlength="10" placeholder="0612345678">
                </label></br>
                <input type="submit" value="Valider">
                <p>* tous ces champs sont obligatoires</p>
            </form>

            
            
        </div><!-- fin main -->
        <footer>
            
            <p class='center'>(c) tous droits réservés</p>
            <p class='center'>
                <a href="http:#qui">Qui sommes nous</a>
                <a href="http:#qui">Nous contacter</a>
                <a href="http:#ou">Adresse</a>
            </p>
        </footer>

    </div>
    <script src="site/js/script.js"></script>
</body>
</html>