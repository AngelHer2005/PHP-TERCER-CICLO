<?php
    $tarifa = "Habitación Raza Miny o Toy (E: S/. 55 - P: S/. 60)";
    $tarifa = substr($tarifa, 0, strpos($tarifa, ' ('));
    echo $tarifa ."n";

?>