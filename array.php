<?php

echo '<br><br>';


// Array, Vector, Arreglo
$nombres = array('<br>', 'Shalom<br>', 'Rosa<br>', 'Noe<br>', 'Emanuel<br>', 'Josue<br>', 'Juan<br>');
var_dump($nombres);

echo '<br><br>';

$nombresPro = array('<br>', 'Shalom<br>', 'Rosa<br>', 'Noe<br>', 'Emanuel<br>', 'Josue<br>', 'Juan<br>');
print_r($nombresPro);

echo '<br><br>';

//Array asociativo.................
$persona = array('nombre' => 'emanuel<br>', 'apellido' => 'vasquez<br>', 'sexo' => 'h<br>', 'edad' => 23 );
print_r($persona);

echo '<br><br>';

echo "Su nombre es: ".$persona['nombre'];
echo '<br><br>';

$materias = array('Disor<br>', 'Desos<br>', 'Ensamblador<br>', 'Plf<br>', 'Sistemas p<br>', 'Admon redes<br>');
print_r($materias);

echo '<br><br>';

echo 'La matria preferida es: '.$materias[1];

?>