<?php
echo '<center><h3> Welcome Caurr</h3><center>';

echo '<h3> unir array</h3>';
$frutas = array('mango', 'sandia', 'platano', 'fresa', 'kiwi');
$verduras = array('calabaza', 'lechuga', 'tomate', 'pepino', 'coliflor' );

$funcionUnir= array_merge($frutas, $verduras );
print_r($frutas);
echo '<br>';
print_r($verduras);
echo '<br>';
print_r($funcionUnir);
echo '<br>';

//invertir cadena
echo '<h3> Invertir cadena </h3>';
$funcionInvertir= array_reverse($funcionUnir);
print_r($funcionInvertir);

//separar cadenas
echo '<h3> Separar cadenas </h3>';
$funcionSeparar= array_chunk($frutas,2);
print_r($funcionSeparar);

//eliminar las 3 primeras frutas
echo '<h3> Eliminar las 3 primeras frutas </h3>';
$funcionEliminar= array_slice($frutas,3);
print_r($funcionEliminar);

//eliminar ultima fruta
echo '<h3> Eliminar ultima fruta </h3>';
array_pop($frutas);
print_r($frutas);

echo '<br>';

$funcionUltimo=array_pop($frutas);
print_r($funcionUltimo);


?>