<?php



$a=5;
$b="5";
$c=9;
$d=2;

// == igual
var_dump($a==$b);

// === identico con tipo de dato
var_dump($a===$b);

// != diferente
var_dump($a!=$b);

// !=== diferente con tipo de datos
var_dump($a!==$b);

// < menor que
var_dump($a<$b);
var_dump($c<$b);
var_dump($d<$b);

// > mayor que
var_dump($a>$b);
var_dump($c>$b);
var_dump($d>$b);

// Mayor o Igual quer
var_dump($a>=$b);
var_dump($c>=$b);
var_dump($d>=$b);

// Menor o Igual quer
var_dump($a<=$b);
var_dump($c<=$b);
var_dump($d<=$b);

// <=> Nave espacial
//echo 2 <=>1; //1
//echo 1<=>1; //0
echo 3<=>5; //-1
echo "\n";

// ?? Fusion de null
$edad_1=23;
echo $edad_2 ?? $edad_1;

echo "\n";

?>