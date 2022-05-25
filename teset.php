<?php

$notas = array(
    6,
    4,
    6,
    9
 );

 $soma = $notas[0] + $notas[1] + $notas[2] + $notas[3];
 $soma = $soma/4;

if ($soma>6) {
    echo "Parabéns você passou :)";
}else {
    echo "Que pena, você não passou :(";
};

 ?>
