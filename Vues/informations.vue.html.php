<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations</title>
</head>
<body>
    <p>Got this far</p>
    <section id="display">
        <?php 
        var_dump($getData);
            foreach($getData as $data):
        ?>
        <div class="displayInfo">
            <div>
                <p><?= $data["themail"] ?></p>
                <p><?=date("Y-m-d", strtotime($data["thedate"]))?></p>
    
            </div>
            <p><?= $data["themessage"] ?></p>
        </div>
        <?php
            endforeach;
            var_dump($data["themessage"]);
            ?>
</body>
</html> 