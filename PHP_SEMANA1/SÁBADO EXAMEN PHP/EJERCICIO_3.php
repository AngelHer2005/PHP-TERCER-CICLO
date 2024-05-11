<?php
    // 3. Desarrollar un programa en php que permita mostrar un mensaje indicando si un alumno está Aprobado o Desaprobado en el curso de 
    // Python FUNDAMENTALS. Para calcular el promedio final del curso se debe considerar: Tarea1, Tarea2 y Tarea3. Para aprobar el curso se 
    // necesita una nota mínima de 14.

    $t1 = doubleval(readline("Ingresa tu primera nota: "));
    $t2 = doubleval(readline("Ingresa tu segunda nota: "));
    $t3 = doubleval(readline("Ingresa tu tercera nota: ")); $prom = ($t1+$t2+$t3)/3;

    if($prom >=14){
        echo "Ha aprobado";
    }else{
        echo "Ha desaprobado";
    }


?>