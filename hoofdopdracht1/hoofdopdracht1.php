<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$appNaam = "StudyBuddy";
$trackerType = "Huiswerk";
$tagline = "Kleine stappen, grote vooruitgang.";
?>


    <h1>Welkom bij <?= $appNaam ?></h1>
    <p>Dit is mijn <?= $trackerType ?> app.</p>
    <p><em><?= $tagline ?></em></p>

    <footer>
        <p>&copy; <?= date("Y") ?> - <?= $appNaam ?></p>
    </footer>

</body>
</html>