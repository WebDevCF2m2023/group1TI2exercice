<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/MyCSS.css">
    <title>Informations</title>
</head>
<body>
<nav >
        <ul>
                <li><a href="./">Accueil</a></li>
                <li><a  href="?section=travaux">Travaux</a></li>
                <li><a href="?section=contact">Contact</a></li>
                <li><a  href="?section=livredor">Livre d'or</a></li>

            </ul>
</nav>
<form action=""method="POST" id="formContainer">

<div id="leNom">
    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom">
</div>
<div id="laDate">
    <label for="age">Date de naissance:</label>
    <input type="date" name="age" id="age">
</div>
<div id="leMdp">
    <label for="mdp">Mot de passe:</label>
    <input type="password" name="mdp" id="mdp" oninput="checkPassword()" required>
</div>


<div id="bouton">
    <input type="submit" value="Envoyez" onclick="submitForm()">
</div>

</form>
</body>
</html>