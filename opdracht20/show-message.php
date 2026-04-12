<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
if (isset($_SESSION['flash'])) {
    echo "<p>" . $_SESSION['flash'] . "</p>";

    // Verwijder de melding zodat hij maar één keer zichtbaar is
    unset($_SESSION['flash']);
}
?>

</body>
</html>