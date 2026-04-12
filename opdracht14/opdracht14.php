<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php


$titel = "Test";   


$titel = trim($titel);


if ($titel === "") {
    echo "Titel is verplicht.";
}


elseif (strlen($titel) < 3) {
    echo "Titel moet minimaal 3 tekens bevatten.";
}

elseif (strlen($titel) > 50) {
    echo "Titel mag maximaal 50 tekens bevatten.";
}


else {
    echo "Titel is geldig.";
}

?>

</body>
</html>