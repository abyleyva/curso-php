<?php

$edades = [18,22,40,34];

// Count: Obtiene cuantos elementos hay en un arreglo
echo count($edades);

//aarray_push: agrega un elemento al final del arreglo
array_push($edades,13);
// var_dump($edades);

// is_array: identifica la variable definida es un arreglo
$noEsUnArreglo="";
var_dump(is_array($noEsUnArreglo));


echo "\n";

?>