<?php
    function area($base, $altura, $opcion){
        $resultado = $opcion == 1 ? ($base*$altura)/2 : $base*$altura;
        return $resultado;
    }
    // $base = doubleval(readline("Ingresa la base: "));
    // $altura = doubleval(readline("Ingresa la altura: "));
    // $opcion = intval(readline("Ingresa la figura:<br/>1. Tríangulo</br>2. Rectángulo"));

    $figuras = ["triángulo", "rectángulo"];
    echo "El resultado del área del " . $figuras[2-1] . " es: " . area(30, 15, 2);

?>