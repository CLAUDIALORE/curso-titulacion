<?php
/**
 * Mostrando texto con echo o echo()
 */

echo "<h2>PHP es divertido!</h2>";
echo "Hola mundo!<br>";
echo "Estoy aprendiendo PHP<br>";
echo "Esta","cadena de texto", "fue","realizada","con multiples paramentros"

echo "<br>";
/**
* Mostrando variables con echo
*/
$txt1 = "Aprende PHP";
$txt2 = "UISLP";
$X = 5;
$Y = 4;

echo "<h2>" . $txt1 . "</h2>"; # el . se utiliza para concatenar
echo "Estudia PHP en la " . $txt2 . "<br>";
echo $x + $y;

echo "<br>";

/**
*Mostrando texto con print o print()
*/

print "<h2> PHP es divertido!</h2>";
print "Hola mundo!<br>";
print("Estoy aprendiendo PHP");
?>