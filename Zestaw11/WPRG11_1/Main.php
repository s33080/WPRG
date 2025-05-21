<?php
require "NoweAuto.php";
require "AutoZDodatkami.php";
require "Ubezpieczenie.php";
try {
    $ubezpieczenie = new Ubezpieczenie("Multipla", 1300,
        4, 56, 30, 200, 2, 13);
} catch (Exception $e) {
    echo $e->getMessage();
}
//$ubezpieczenie = new Ubezpieczenie("Skoda Octavia",23,23,23,23,23,32,32);
printf("Ubezpieczenie: %s", $ubezpieczenie->ObliczCene());
