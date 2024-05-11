<?php
    // 10. Desarrolle un programa en PHP, donde ingrese la cantidad de dinero en soles y convertirlo a dólares. Imprime el mensaje de la 
    // cantidad de dólares calculada.

    $soles = doubleval(readline("Ingresa un valor de soles: "));

    echo "El valor a dólares es: $" . $soles * 0.27;
?>