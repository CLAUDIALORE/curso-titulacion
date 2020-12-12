<?php
/**
* un arrray  almacena multiples valores en una variable.
*En PHP la funcion array() es utilizar para crear un arreglo
*/

$frutas = array ("Mango","Manzana""Pera","Naranja");
echo"Compra" . $frutas . "," .$frutas . "y" . $frutas  ;
echo "<br>";

/**
*Obtener la longuitud de un arreglo con la funcion count()
*/

echo "longuitud:" . count($frutas);
echo "<br>";

/**
* Arreglos indexados en PHP
* Los indices se pueden asignar automaticamente o de manera manual
*/

// Asignacion automatica
$anaimales = array("perro", "gato", "conejo");
var_dump($animales);
echo "<br>";

//Asignacion manual
$colores[0] = "rojo";
$colores[1] = "azul";
$colores[2] = "verde";
var_dump($colores);
echo "<br>";

/** 
* Interar un arreglo
*/

$idiomas = array(
    "español",
    "ingles",
    "aleman",
    "frances",
    "portugues",
    "italiano",
);
$idiomasLenght = count($idiomas);
echo "Los idiomas son:<br>";
for ($x=0; $x < $idiomasLength; $x++){
    echo $idiomas[$x]  ;
    echo "<br>";
}

/**
* Arreglo asociativo
*/

$edad = array(
    "pedro" => 25 ,
    "juan" => 26 ,
    "Alejandro" => 30 ,
);
echo "juan tiene" . $edad ["juan"] . "años";
echo "<br>";

/**
* Interar en un arreglo asociativo
*/

foreach ($edad as $key => $value){
    echo "Llave = " . $key . ",valor = " . $value;
    echo "<br";
}
/**
*Array multidimensional
*/
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Vm Golf",5,2),
    array("Land Rover",17,15),
);
echo $cars[0][0].": En almacen: ".$cars[0][1].", vendidos: ".$cars[0][2].".<br>";
echo $cars[1][0].": En almacen: ".$cars[1][1].", vendidos: ".$cars[1][2].".<br>";
echo $cars[2][0].": En almacen: ".$cars[2][1].", vendidos: ".$cars[2][2].".<br>";
echo $cars[3][0].": En almacen: ".$cars[3][1].", vendidos: ".$cars[3][2].".<br>";

/**
* Interar en un array multidimensional
*/
for ($row = 0; $row < 4; $row++){
    echo "<p><b>Numero de fila $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++){
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}
?>