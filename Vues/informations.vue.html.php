<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations</title>
    <link rel="stylesheet" href="/css/MyCSS.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="./">Accueil</a></li>
            <li><a href="?section=travaux">Travaux</a></li>
            <li><a href="?section=contact">Contact</a></li>
            <li><a href="?section=livredor">Livre d'or</a></li>

        </ul>
    </nav>
    <div id="commentaires">
        <?php foreach ($informations as $information) : ?>
            <div class="message">
                <h2><?= $information["thedate"] ?></h2>
                <p><?= $information["themessage"] ?></p>
                <hr>
            </div>

        <?php endforeach ?>
    </div>
    <p id="erreur-message"><?= $erreur_message ?></p>
    <form action="./" method="post">
        <div class="bloc">
            <label for="email">email</label>
            <input type="email" name="mail" id="mail">
        </div>

        <div class="bloc">
            <label for="message">message</label>
            <textarea name="message" id="message"></textarea>
        </div>
        <div class="bloc">
            <input type="submit" value="envoyer">
        </div>
    </form>

</body>

</html>