<?php
$n1 = readline("Ingresa un número: ");

if($n1 % 4 == 0 && $n1 % 2 == 0){
    echo "Es múltiplo de 4 y 2.";
}elseif($n1 % 2 == 0){
    echo "Es múltiplo de 2.";
}else{
    echo "No es múltiplo de dos.";
}       
?>
