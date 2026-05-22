<?php
try {
    $db = new PDO(
        "mysql:host=localhost;dbname=p3_app;charset=utf8",
        "root",
        ""
    );
} catch (PDOException $e) {
    // Geen echo hier!
    die("Databasefout");
}
