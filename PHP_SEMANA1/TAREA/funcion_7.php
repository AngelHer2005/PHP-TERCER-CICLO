<?php
    function esPar($numero){
        if($numero%2==0){
            return "par.";
        }else{
            return "impar.";
        }
    }
    echo "El número 25 es " . esPar(25);

?>