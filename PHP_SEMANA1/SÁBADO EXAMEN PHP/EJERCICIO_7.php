<?php
    // 7. La entidad educativa “SENATI - Schools” requiere crear un programa que permita ingresar cuatro notas de un alumno (Examen Parcial, 
    // Examen Final, Promedio de Trabajos y Promedio de Prácticas), mostrar su promedio y que determine si el alumno está aprobado o no. Considérese 
    // a un alumno aprobado si es que obtiene el promedio mayor o igual a 13, caso contrario se considera desaprobado.
    // Para este caso implemente una función cuyo nombre sea obtenerMensaje, debe de enviar las cuatro notas como parámetro de entrada y la función 
    // debe hacer el cálculo y sacar el mensaje pedido. El mensaje debe empezar diciendo “Promedio de alumno”.

    function obtenerMensaje($ep, $ef, $pt, $pp){
        echo "Promedio de alumno: ";
        $prom = ($ep + $ef + $pt + $pp)/4;
        if($prom >= 13){
            echo $prom . "\nResultado: Aprobado";
        }else{
            echo $prom . "\nResultado: Desaprobado";
        }
    }

    echo obtenerMensaje(14,17,18,19);


?>