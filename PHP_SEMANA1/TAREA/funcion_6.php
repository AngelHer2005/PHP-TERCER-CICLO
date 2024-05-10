<?php
    function circulo($radio){
        return (M_PI * ($radio**2));
    }
    echo "El área del círculo de radio 10 es: " . round(circulo(10),2);
?>