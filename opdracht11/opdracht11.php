<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="POST">
    <input type="text" name="naam" placeholder="Naam" required>
    <input type="number" name="aantal" placeholder="Aantal">
    <button type="submit">Verzend</button>
</form>

<?php

if (isset($_POST["naam"])) {

    echo "<p>Naam: " . $_POST["naam"] . "</p>";
    echo "<p>Aantal: " . ($_POST["aantal"] ?? "Geen aantal ingevuld") . "</p>";
}
?>

</body>
</html>