<?php

$edades=array(
    "carlos" => 18,
    "Aby" =>27,
    "Ale" => 40,
);


$cafes=array(
    "Capuccino"=>50,
    "Latte"=>49,
    "Americano"=>70,
);


echo "La edad de Ale es " . $edades["Ale"];
echo "\n";

echo "El Pecio del Cafe Americano es de {$cafes['Americano']}";
echo "\n";

$personas=array (

    "Aby"=> array(
        "edad" =>20,
        "apellido"=>"Leyva"
    ),
    "Alex"=> array(
        "edad" =>10,
        "apellido"=>"Leyva"
    ),
);

echo "La informacion de Alex es: edad: " . $personas["Alex"]["edad"] . " Apellido: " . $personas["Alex"]["apellido"] ;
echo "\n";

?>