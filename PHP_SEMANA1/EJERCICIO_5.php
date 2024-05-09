<?php
$nombre = readline("Ingrese los nombres y apellidos del empleado: ");

$estado_civil = readline("Ingrese el estado civil del empleado: ");

$horas_trabajadas = (int)readline("Ingrese las horas trabajadas por el empleado: ");

$pago_por_hora = (float)readline("Ingrese el pago por hora del empleado: ");

echo "\nResultados:\n";
echo "Nombre del empleado: $nombre\n";
echo "Estado civil: $estado_civil\n";
echo "Horas trabajadas: $horas_trabajadas\n";
echo "Pago por hora: $pago_por_hora\n";
echo "Sueldo a pagar: " . ($horas_trabajadas * $pago_por_hora);
?>
