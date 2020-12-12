<?php
/** 
 * Declarar funciones en php
*/

function Saludo(){
    echo "hola ¿como estan?";
}
Saludo();
echo "<hr>";
/**
 * Funcion con parametros
 */
function Suma(int $a, int $b) {
    $resultado = $a + $b;
    return $resultado;
}
echo (Suma(5, 7));
?>