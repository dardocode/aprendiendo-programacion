<h3> Tipo de Datos</h3>
<li> PHP admite los siguientes tipos de datos:</li>
<li> String</li>
<li> Integer</li>
<li> Float (número de punto flotante)</li>
<li> Boolean</li>
<li> Array</li>
<li> Object</li>
<li> NULL</li>
<li> Resource</li>
<?php


echo" String";
echo "<br>";
// Una cadena de caracteres es una secuencia de caracteres, como "Hola Mundo!".
// Una cadena de caracteres se puede especificar como comillas simples o dobles.
// Ejemplo:
$x = "Hola Mundo!";
$y = 'Hola Mundo!';
echo $x;
echo "<br>";
echo $y;
echo "<br>";

echo "Integer";
// Un número entero es un número sin decimales.
// Un número entero debe tener al menos un dígito.
// Ejemplo:
$x = 5985;

// Float
// Un número de punto flotante es un número con decimales o un número en notación exponencial.
// Ejemplo:
$x = 10.365;
$y = 2.4e3;
$z = 8E-5; 

// Boolean
// Un booleano representa dos estados: TRUE o FALSE.
// Ejemplo:
$x = true;
$y = false;
echo $x;
echo "<br>";
echo $y;
echo "<br>"; 

// Array
// Un arreglo almacena múltiples valores en una sola variable.
// Ejemplo:
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>"; 

// Object
// Un objeto es una instancia de una clase.
// Una clase es un plano para objetos.
// Ejemplo:
class Car {
    function Car() {
        $this->model = "VW";
    }
}
// create an object
$herbie = new Car(); 

// NULL
// NULL es un valor especial que indica que una variable no tiene valor.
// NULL es el único valor posible del tipo NULL.
// NULL es útil si desea asignar una variable a NULL.
// Ejemplo:
$x = "Hello world!";
$x = null;
var_dump($x);
echo "<br>"; 

?>
</body>
</html>