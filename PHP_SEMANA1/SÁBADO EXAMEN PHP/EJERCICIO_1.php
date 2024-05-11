<?php
    // 1.	Ingresar la edad de una persona e indique si es mayor de edad o es menor de edad.
    $edad = intval(readline("Ingresa tu edad: "));
    if($edad >= 18){
        echo "Usted es mayor de edad.";
    }else{
        echo "Usted es menor de edad.";
    }

?>