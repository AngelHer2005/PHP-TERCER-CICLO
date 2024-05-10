<?php
    function maximo($a, $b) {
        // Es un operador ternario utilizado en JavaScript, Java, Ruby, Swift y, claramente, también en PHP.
        // La sintaxis general es esta: condición ? valor_si_verdadero : valor_si_falso
        // En python también está, pero tiene otra sintaxis.
        return $a > $b ? $a : $b;
    }
    echo "El máximo entre 10 y 5 es: " . maximo(10, 5);
?>