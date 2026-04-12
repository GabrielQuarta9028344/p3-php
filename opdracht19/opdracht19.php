<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
session_start();

$_SESSION['kleur'] = 'lila';   

?>
<!DOCTYPE html>
<html>
<body>

<p>Mijn opgeslagen waarde is: <?php echo $_SESSION['kleur']; ?></p>

</body>
</html>