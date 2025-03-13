<?php
echo '<p>variables se escriben con el simbolo de moneda o $</p>';
print '<p>las variables se pueden colocar dentro de cadenas de texto sin necesidad de concatenarlas</p>';
echo '<p>Comentarios se pueden hacer con el numeral o #</p>';

/*
Rules for PHP variables:

A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables)

Scope of Variables (alcance de las variables)
A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function
A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:
You can have local variables with the same name in different functions, because local variables are only recognized by the function in which they are declared.

*/

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

//para que una variable pueda imprimirse en pantalla se debe de colocar el simbolo de moneda o $ al inicio de la variable y en echo colocar comillas dobles.
$_nombre= "David";
echo " /n <br> $_nombre";
//tambien se puede concatenar con el punto
// Es preferible usar comillas senzillas para imprimir texto y comillas dobles para imprimir variables
// Por seguridad es mejor comillas senzillas
echo 'Hola ' . $_nombre;
?>