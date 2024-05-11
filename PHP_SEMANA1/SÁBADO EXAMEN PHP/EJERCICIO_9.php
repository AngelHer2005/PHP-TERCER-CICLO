<?php
    // 9. Elabora un programa en PHP, que permita ingresar números enteros. El programa terminará cuando la suma de los números ingresados 
    // sea mayor a 100. Utiliza la estructura WHILE.
    $num = 0;

    while($num < 100 && $num > -1){
        $num += intval(readline("Ingresa un número entero: "));
    }
    $msj = $num < 0 ? "Ingresó un valor negativo." : "El número llegado es superior o igual a 100: " . $num;
    echo $msj;
?>