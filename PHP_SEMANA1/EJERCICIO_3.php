<?php
    $edad = 0;
    $edad = intval(readline("¿Cuántos años tienes?"));
    if ($edad<0) {
        echo "No se puede tener una edad negativa.";
    }elseif ($edad>=0 && $edad < 18) {
        echo "No eres mayor de edad.";
    }else{
        echo "Bienvenido.";
    }
?>