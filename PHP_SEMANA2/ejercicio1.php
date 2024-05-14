<?php
    function estado($imc){
        if($imc < 18.5){
            return "Bajo peso.";
        }elseif($imc < 24.9){
            return "Peso saludable.";
        }elseif($imc < 29.9){
            return "Sobrepeso.";
        }else{
            return "Obesidad";
        }
    }
    function imc($peso, $altura){
        return round($peso / ($altura**2), 1);
    }
    $imc = imc(80, 1.74);
    echo "IMC: " .  $imc;
    echo "<br/>Nivel de peso: " . estado($imc);
?>