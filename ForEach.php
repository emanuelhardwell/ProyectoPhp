<?php

echo '<center> <h3> ..... For each ..... </br> </center><center>';

$equipos = array('America' => 'Juan', 'Cruz azul' => 'Hardwell', 'Necaxa' => 'Felipe', 'Chivas' => 'Elto', );

foreach ($equipos as $datos => $value) {
    echo $datos .': ---> '. $value. '<br>';
}

echo '<br>';

foreach ($equipos as $datos => $value) {
    echo $value . '<br>';
}
?>