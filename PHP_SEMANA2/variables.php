<?php
    $num1 = 5000;
    $num2 = 8000;

    $mul = bcmul($num1, $num2);
    $expon = bcpow($num1, $num2);
    $total = bcadd($mul, $expon);

    echo "<br/>";
    echo "La multiplicción es: " . $mul . "<br/>";
    echo "El exponente " . $num2 . " de " . $num1 . " es: " . $expon . "<br/>";
    echo "El total de ambos es: " . $total . "<br/>";
 
    $con = $num1 > 4500 ? "si" : "no";
?>