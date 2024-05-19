<?php
function tipoTriangulo($l1, $l2, $l3) {
if ($l1 < $l2 + $l3 && $l2 < $l1 + $l3 && $l3 < $l1 + $l2) {
if ($l1 == $l2 && $l2 == $l3) {
return "equilátero";
} elseif ($l1 == $l2 || $l1 == $l3 || $l2 == $l3) {
return "isósceles";
} else {
return "escaleno";
}
} else {
return "No es un triángulo";
}
}
?>