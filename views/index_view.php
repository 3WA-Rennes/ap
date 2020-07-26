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
            <a href='index.php?class=uSer&action=goConnexion'>Connexion</a>       
        </nav><!-- fin nav-->
        <div class="main">
            
            <p class="center" >page actuelle : 1</p>
            <h2>Bienvenue</h2>  

        <?php foreach($articles as $a): ?>
            <article>
                <h3>
                    <?= $a->getTitle(); ?>
                </h3>
                <p class="center">Date de publication : <?= $a->getCreatedAt(); ?> -  Auteur : <?= $a->getIdUser(); ?></p>
                <p> 
                    <?= $a->getContent(); ?>
                </p>
            </article>
        <?php endforeach ?>

            <?php 
                /*  DEBUG A SUPPRIMMER
                echo '<pre>';
                    print_r($articles); 
                echo '</pre>';
                */
            ?>

            <fieldset class="center">
                <legend class="lienPage">Pages</legend>
                    <a href>1</a>
                    <a href>2</a>
                    <a href>2</a>
                    <a href>4</a>
                    <a href>5</a>
                    <a href>6</a>
            </fieldset>
        </div><!-- fin main -->
        <footer>
            
            <p class='center'>(c) tous droits réservés</p>
            <p class='center'>
                <a href="http:#qui">Qui sommes nous ?</a>
                <a href="http:#qui">Nous contacter</a>
                <a href="http:#ou">Adresse</a>
            </p>
        </footer>

    </div>
    <script src="site/js/script.js"></script>
    
</body>
</html>