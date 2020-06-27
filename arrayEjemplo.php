<?php

echo '<h2> Welcome to Array </h2>';

$cursosUdemy = array('php', 'java', 'go', 'phyton', 'typesript', 'react');

for ($i=0; $i < count($cursosUdemy) ; $i++) { 
    echo $cursosUdemy[$i].'<br>';
}

echo '<br><br>';

//actualizar datos de Array
$cursosUdemy = array('php', 'java', 'go', 'phyton', 'typesript', 'react');
$cursosUdemy[2]= 'Golang';
$posicion= count($cursosUdemy)-4;

echo 'El curso modificado es: '.$cursosUdemy[2].' con indice '. $posicion .'<br>';
echo 'El tamaño del array es: ' .count($cursosUdemy). '<br><br>';

for ($i=0; $i < count($cursosUdemy) ; $i++) { 
    echo $cursosUdemy[$i].'<br>';
}

//ordenar array de a -z
echo '<h3> Orden de array de A-Z </h3>';

$cursosUdemy = array('php', 'java', 'go', 'phyton', 'typesript', 'react');
asort($cursosUdemy);
print_r($cursosUdemy);

echo '<h3> Orden de array Z-A </h3>';

rsort($cursosUdemy);
print_r($cursosUdemy);


?>