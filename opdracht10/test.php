<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="GET">
    <input type="text" name="titel">
    <button type="submit">Verzend</button>
</form>

<?php

print_r($_GET);
        
echo "<br>Titel: " . ($_GET["titel"] ?? "Nog niets ingevuld");
?>


</body>
</html>