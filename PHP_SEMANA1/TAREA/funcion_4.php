<?php
    function contar_lista($lista){
        $contador = 0;
        foreach($lista as $i){
            $contador++;
        }
        return $contador;
    }
    $lista = [1,2,3,4,5,6,7,8,9,10];

    echo "Hay " . contar_lista($lista) . " elementos en la lista.";
?>