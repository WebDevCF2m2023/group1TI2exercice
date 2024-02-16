<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="/css/MyCSS.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations</title>
</head>
<body>

    <section id="display">
    <?php 


    ?>
<div class="displayInfo">
<?php foreach ($getData as $datas) : ?>
            <div class="message"><hr>
                <h4><?= $datas["thedate"] ?></h2>
                
                <p><?= $datas["themessage"] ?></p>

                            </div>
<?php
    endforeach;

    ?>
    <p id="messageErr"><?= $messageERR ?></p>
    <form action="./" method="post">
        <div class="holder">
            <label for="email">Email</label>
            <input type="email" name="mail" id="mail">
        </div>
            
        <div class="holder">
            <label for="message">Votre Message</label>
            <textarea name="message" id="message"></textarea>
        </div>
        <div class="holder">
            <input type="submit" value="Envoyez votre message">
        </div>
    </form>
</div>
</body>
</html> 