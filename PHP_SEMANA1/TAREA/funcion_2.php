<?php
    function conversor($texto, $op){
        switch ($op) {
            case 1:
                return strtoupper($texto);
                break;
            case 2:
                return strtolower($texto);
                break;
            case 3:
                return ucfirst(strtolower($texto));
                break;
        }
    }
    $op = readline("¿En qué quieres convertir tu texto?\n1. Mayúsculas\n2. Minúsculas\n3. Solo mayúscula la primera letra.");
    $texto = readline("Ingresa el texto: ");
    echo "Texto Convertido: " . conversor($texto, $op);




?>