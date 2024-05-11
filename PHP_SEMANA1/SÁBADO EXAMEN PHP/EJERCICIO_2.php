<?php
    // 2.	Ingresar el sueldo de una persona, si supera los S/. 3,000 soles mostrar un mensaje en pantalla indicando que debe abonar impuestos.

    $sueldo = doubleval(readline("Ingresa tu sueldo: "));

    if($sueldo > 3000){
        echo "Usted debe abonar impuestos.";
    }

?>