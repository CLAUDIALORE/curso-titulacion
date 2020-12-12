<?php
/**
 * 
 */


// String
$saludo = "Hola";
echo $saludo. "Bienvenidos a " . 'PHP';
ECHO <br>;

//Inter
echo "<hr>";
$x =2020;
Var_dump($x);
echo    "<br>";

//Float
echo "<hr>";
$y = 10.5672;
Var_dump($y);
echo "<br>";

//Bolean
echo "<hr>";
$Verdadero = true;
$falso = false;
var_dump($verdadero);
echo"<br>";

//Array
echo "<hr>";
$colores = array ("rojo", "verde","azul","negro","blanco");
var_dump($colores);
echo "<br>";

//Object
echo "<hr>";
class Carro{
    public $color;
    public $modelo;

    public function ___construct($color,$modelo) {
          $this->color = $color;
         $this->modelo = $modelo;
    }
    public function mensaje()}
    return "Mi carro es un" . $this->modelo ."" . $this->color;
    
    }
  }
  //OBJETO 1
$miCarro = new Carro("Rojo","Chevrolet");
echo $miCarro->mensaje();
echo "<br>";
echo $micarro->detenerse();
echo "<br>";

//Objeto 2
$miCarro = new Carro("Blanco","Toyota");
echo $miCarro->mensaje();
echo "<br>";

//Null
echo "<hr>";
$valor = 4;
$valor = NULL: // es diferente a decir $valor = " ";
var_dump($valor);

// Resourse
echo "<hr>";
/**
 *Recursos externos a php
 *Base de datos
 *Funciones
 *etc
 */
?>