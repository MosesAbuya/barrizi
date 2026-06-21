<?php
require 'includes/connection.php';
$res = mysqli_query($connection, "SHOW TABLES");
while ($r = mysqli_fetch_row($res)) {
    echo "TABLE: " . $r[0] . "\n";
    $cols = mysqli_query($connection, "SHOW COLUMNS FROM " . $r[0]);
    while ($c = mysqli_fetch_assoc($cols)) {
        echo " - " . $c['Field'] . "\n";
    }
}
?>
