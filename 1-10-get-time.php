<?php

$segundos=readline("Ingresa el tiempo en segundos ");

echo $segundos;

echo "\n";

$horas=round($segundos /3600);
$segundos=$segundos % 3600;

$minutos= round($segundos/60);
$segundos=$segundos % 60;



echo "Resultado es: $horas horas, $minutos minutos y $segundos segundos";
echo "\n";


?>