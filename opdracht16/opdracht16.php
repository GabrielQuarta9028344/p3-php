<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$pdo = new PDO("mysql:host=localhost;dbname=test;charset=utf8", "root", "");

$titel = "Test item";
$omschrijving = "Dit is een test.";

$sql = "INSERT INTO items (titel, omschrijving) VALUES (:titel, :omschrijving)";
$stmt = $pdo->prepare($sql);

$stmt->execute([
    ":titel" => $titel,
    ":omschrijving" => $omschrijving
]);

echo "Insert gelukt (als je geen error ziet).";

?>

</body>
</html>