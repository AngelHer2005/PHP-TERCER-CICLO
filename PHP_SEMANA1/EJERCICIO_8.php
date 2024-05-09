<?php
$sueldo = readline("Ingresa su sueldo: ");


echo "\nResultados:\n";
echo "Sueldo: S/. " . ($sueldo) . "\n";
echo "Descuento: S/. " . ($sueldo*0.05) . "\n";
echo "Bonificación: S/. " . ($sueldo*0.09) . "\n";
echo "Total: S/. ". ($sueldo-(($sueldo*0.05) + ($sueldo*0.09))) . "\n";
?>
