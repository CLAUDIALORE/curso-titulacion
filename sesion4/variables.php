<?php
# Declaraciones de variables
$txt = "Hola a todos";
/*los nnombres de variables empiezan connel signo de $
los nombres de las variables deben empezar con una letra o _
No pueden iniciar con un numero y solo pueden contener caracteres
alfanumericos
Los nombres de variables son sencibles a mayusculas y minusculas
*/
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$a = 5;
$b = 3;

echo "la suma de: " , ($a + $b);

#Alcance de las variables

// Global
$c = 5; // variable global

function pruebaGlobal() {
    //utilizar n dentro de esta funcion marcara error.
    echo "<p>Variable c dentro de la funcion es: $c</p>";
}

pruebaGlobal();

echo "variable c fuera de la funcion es: $c</p>";
//local
$z = 5;// variable global

function pruebaLocal(){
    // utilizar n dentro de esta funcion  marcara error.
    echo"<p>Variable z dentro de la funcion es: $z</p>";
}

pruebaLocal();

echo "Variable z fuera de la funcion es: $z</p>";
?>