<?php
echo '<p>variables se escriben con el simbolo de moneda o $</p>';
print '<p>las variables se pueden colocar dentro de cadenas de texto sin necesidad de concatenarlas</p>';
echo '<p>Comentarios se pueden hacer con el numeral o #</p>';

#Variable Numérica
$numero = 5;
echo "Esto es una variable Número: $numero<br>";
var_dump($numero);
echo "<br><br>";

#Variable texto
$palabra = "palabra";
echo "Esto es una variable texto: $palabra<br>";
var_dump($palabra);
echo "<br><br>";

#Variable Boleana
$boleana = true;
echo "Esto es una variable boleana: $boleana<br>";
var_dump($boleana);
echo "<br><br>";

#Variable Arreglo
$colores = array("rojo","amarillo");
echo "Esto es una variable arreglo: $colores[1]<br>";
var_dump($colores);
echo "<br><br>";

#Variable Arreglo con Propiedades
$verduras = array("verdura1"=>"lechuga", "verdura2"=>"cebolla");
echo "Esto es una variable arreglo con propiedades: $verduras[verdura1]<br>";
echo('<p>'.$verduras['verdura2'].'</p>');
var_dump($verduras);
echo "<br><br>";

#variables Objeto
$frutas = (object)["fruta1"=>"pera","fruta2"=>"manzana"];
echo "Esto es una variable objeto: $frutas->fruta1<br>";
var_dump($frutas);
?>