<?php
    $numero = rand(1,6);
    $numeroT = "";
    switch ($numero) {
        case 1:
            $numeroT = "Uno";
            break;
        case 2:
            $numeroT = "Dos";
            break;
        case 3:
        case 4:
            $numeroT = "Tres o Cuatro";
            break;
        case 5:
            $numeroT = "Cinco";
            break;
        case 6:
            $numeroT = "Seis";
            echo $numeroT;
            break;
        default:
            echo "Desconocido";
    }
    echo "El número entre 1 y 6 es: $numero\n";
    echo "El número de Texto es: $numeroT";
?>