<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/MyCSS.css">
</head>
<body>
    <h1>Formulaire</h1>
    <form action="" method="post">
        <div>
        <div id="colGauche">
            <div id="leNom">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" required>
            </div>
            <div id="lePrenom">
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom" required>
            </div>
            <div id="ddn">
                <label for="ddn">Date de naissance</label>
                <input type="date" id="date" name="user_ddn" required>
            </div>
            <div id="leGenre">
                <fieldset>
                    <legend>&nbsp;Genre&nbsp;</legend>
                    <div>
                        <input type="radio" name="genre" id="homme" value="H" checked>
                        <label for="homme">Homme</label>
                    </div>
                    <div>
                        <input type="radio" name="genre" id="femme" value="F">
                        <label for="femme">Femme</label>
                    </div>
                </fieldset>
            </div>
            <div id="laLangue">
                <label for="langue">Langue :</label>
                <select name="langue" id="langue">
                    <option value="FR">Français</option>
                    <option value="NL">Néerlandais</option>
                    <option value="DE">Allemand</option>
                    <option value="EN">Anglais</option>
                </select>
            </div>
        </div>
        <div id="colDroite">
            <div id="username">
                <label for="username">Pseudo</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div id="email">
                <label for="email">Email</label>
                <input type="email" id="email" name="themail" required>
            </div>
            <div id="password">
                <label for="password">Password</label>
                <input type="password" id="passWord" name="password" required>
            </div>
            <div id="lemessage">
                <label for="msg">Message</label>
                <textarea name="themessage" id="msg" cols="30" rows="5" maxlength="1024"></textarea>
            </div>
            <div id="lergpd">
                <input type="checkbox" name="rgpd" id="rgpd"><label for="rgpd">J'accepte que mes données soient stockées et je suis d'accord avec la politique de confidentialité.</label>
            </div>
        </div>
        </div>
        <div id="envoi">
            <input type="submit" onclick="validateForm(event)" value="Envoyer les données">
        </div>
    </form>
    <h1>Commentaires</h1>
    <section id="informations">
        <?php 
            foreach(array_reverse($informations) as $information):
        ?>
        <div class="information">
            <div>
                <p><?= $information["themail"] ?></p>
                <p><?=(new DateTime($information["thedate"]))->format('d/m/Y H:i:s')?></p>
            </div>
            <p><?= $information["themessage"] ?></p>
        </div>
        <?php
            endforeach;
        ?>
    </section>
    
    <script src="script.js"></script>
</body>
</html>