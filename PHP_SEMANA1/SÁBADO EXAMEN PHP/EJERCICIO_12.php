<?php
    // 12.	Desarrolle un programa donde ingreses los lados de un triángulo y debemos indicar si es triángulo equilátero (3 lados miden igual), 
    // isósceles (2 lados son iguales y el otro mide distinto) o escaleno (los 3 miden distinto).
    function triangulo($l1, $l2, $l3){
        if ($l1 == $l2 && $l2 == $l3) {
            return "Triángulo equilátero";
        } elseif ($l1 == $l2 || $l1 == $l3 || $l2 == $l3) {
            return "Triángulo isósceles";
        } else {
            return "Triángulo escaleno";
        }
    }

    $l1 = intval(readline("Ingresa el primer lado de un triángulo: "));
    $l2 = intval(readline("Ingresa el segundo lado de un triángulo: "));
    $l3 = intval(readline("Ingresa el tercer lado de un triángulo: "));

    echo "Es un " . triangulo($l1, $l2, $l3);
?>