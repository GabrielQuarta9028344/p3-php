<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$pdo = new PDO("mysql:host=localhost;dbname=test", "root", "");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $titel = $_POST["titel"];

    $stmt = $pdo->prepare("INSERT INTO items (titel) VALUES (?)");
    $stmt->execute([$titel]);

}
?>

<form method="POST">
    <input type="text" name="titel" placeholder="Titel">
    <button type="submit">Opslaan</button>
</form>

</body>
</html>