<?php
    // 4.	Desarrollar un programa en php que permita ingresar un número entero. Se desea saber si es “Par” o “Impar” (Par: var_numero%2==0)
    $num = intval(readline("Ingrese un número entero: "));

    if($num >= 0 ){
        if($num % 2 == 0){
            echo "Es par.";
        }else{
            echo "Es impar";
        }
    }else{
        echo "Ingresa números enteros.";
    }

?>