<?php
    function operation($n1, $n2, $op){
        switch ($op) {
            case 1:
                return $n1+$n2;
                break;
            case 2:
                return $n1-$n2;
                break;
            case 3:
                return $n1*$n2;
                break;
            case 4:
                return round($n1/$n2,2);
                break;
        }
    }
    $op = intval(readline("¿Qué operación quieres realizar?\n1. Suma\n2. Resta\n3. Multiplicación\n4. División\n"));
    $n1 = intval(readline("Ingresa el primer número: "));
    $n2 = intval(readline("Ingresa el segundo número: "));

    echo "El resultado es: " . operation($n1, $n2, $op);
?>