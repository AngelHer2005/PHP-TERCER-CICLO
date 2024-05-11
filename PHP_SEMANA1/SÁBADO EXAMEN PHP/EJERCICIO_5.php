<?php
    // 5.	Desarrollar un programa en php que calcule el promedio (debe ingresar 3 notas) de un alumno para evaluar su rendimiento 
    // (Malo 0-10, Regular 11-13, Bueno 14- 17, Excelente 18-20)
    $n1 = doubleval(readline("Ingresa tu primera nota: "));
    $n2 = doubleval(readline("Ingresa tu segunda nota: "));
    $n3 = doubleval(readline("Ingresa tu tercera nota: ")); $prom = ($n1+$n2+$n3)/3;
    
    if ($prom >= 18 && $prom <= 20) {
        echo "Excelente";
    } elseif ($prom >= 14) {
        echo "Bueno";
    } elseif ($prom >= 11) {
        echo "Regular";
    } else {
        echo "Malo";
    }
?>