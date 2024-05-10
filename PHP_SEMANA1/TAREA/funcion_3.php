<?php
    function random($n1, $n2){
        return rand($n1, $n2);
    }
    $n1 = intval(readline("Ingresa el primer número"));
    $n2 = intval(readline("Ingresa el segundo número"));

    echo "El número es: " . random($n1, $n2);

?>