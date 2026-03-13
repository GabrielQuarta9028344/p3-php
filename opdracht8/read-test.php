<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "p3_games";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$games = $conn->prepare("SELECT * FROM GAMES");
$games->execute();
$bakje_met_games = $games->fetchAll(PDO::FETCH_ASSOC);

echo "<ul>";

foreach ($bakje_met_games as $game) {
    echo "<li>" . $game['title'] . "</li>";
}

echo "</ul>";

?>
<ul>

</ul>

</body>
</html>