<?php
//echo '<br>';
echo '<center> <h3> Welcome To Functions </h3> </center> <center>';

// funcion simple
 function sumar($num1, $num2){
    $resultado= $num1 + $num2;
    echo 'La suma de '. $num1. ' + '. $num2. ' = '.$resultado;
 }

sumar(5,9);

echo '<br>';

// funcion con RETURN
function sumaPro($num1, $num2){
    return $num1 + $num2;
}

$final= sumaPro(5,11);
echo 'La suma de 5 + 11 = '.$final;

?>