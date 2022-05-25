<?php

$notas = array(
    6,
    0,
    6,
    8
 );

 $soma = $notas[0] + $notas[1] + $notas[2] + $notas[3];
 $soma = $soma/4;

 //var_dump($soma);

if ($soma>=6) {
    echo "Parabéns você passou :)";
}else {
    echo "Que pena, você não passou :(";
};

 ?>
