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

echo '<br> <br>';

//funciones Pro Pro Pro ...........
$v1=10;
$v2=5;

function restar(){
    global $v1;
    global $v2;
    $resultado= $v1 -$v2;
   
    echo 'La resta de '. $v1. ' - '. $v2. ' = '.$resultado;
 }

restar();

echo '<br> <br>';

//funciones Pro Pro Pro ----- se necesita modificar las variables globales


function restarPro($v1, $v2){
    global $v1;
    global $v2;
    
    return $v1 -$v2;
 }

$resultados= restarPro(18-6);
echo 'La resta pro de '.$v1. ' - '. $v2. ' = '.$resultados;


?>