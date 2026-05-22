<?php
require 'includes/db.php';

$items = $db->prepare("SELECT * FROM hoofdopdracht3");
$items->execute();
$bakje_met_items = $items->fetchAll(PDO::FETCH_ASSOC);
echo "<ul>";

foreach ($bakje_met_items as $item) {
    echo "<li>" . $item['titel'] . "</li>";
}

echo "</ul>";