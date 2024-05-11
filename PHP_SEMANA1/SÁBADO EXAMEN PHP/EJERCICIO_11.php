<?php
    // 11.	Desarrolle un programa en PHP donde pida ingresar 2 números y la operación a calcular.
    // a.	La operación “S” debe realizar la suma.
    // b.	La operación “R” deber realizar la resta
    // c.	La operación “M” debe realizar la multiplicación
    // d.	La operación “D” debe realizar la división
    // Imprime el resultado calculado.
    function operacion($n1, $n2, $op){
        switch ($op) {
            case "S":
                return $n1 + $n2;
            case "R":
                return $n1 - $n2;
            case "M":
                return $n1 * $n2;
            case "D":
                return $n1 / $n2;

        }
    }

    $n1 = intval(readline("Ingresa un número: "));
    $n2 = intval(readline("Ingresa otro número: "));
    $op = Strtolower(readline("Ingresa la operación: \nS: suma\nR: resta\nM: multiplicación\nD: División"));
    echo "El resultado de la operación es: " . operacion($n1, $n2, $op);
?>