<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php


$games = 
[
    [
        "titel" => "The Legend of Zelda: Breath of the Wild",
        "genre" => "Adventure",
        "platform" => "Nintendo Switch",
    ],
    [
        "titel" => "Elden Ring",
        "genre" => "Action RPG",
        "platform" => "PC",
    ]
];

echo $games[0]["titel"];   
echo $games[1]["titel"];

?>

    
</body>
</html>