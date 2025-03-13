<?php

// Constantes
// Una constante es un identificador (nombre) para un valor simple. El valor no puede ser cambiado durante el script.
// Un nombre de constante válido comienza con una letra o un guión bajo (no hay cifras en el nombre de la constante).
// Para crear una constante, use la función define().
// Sintaxis: define(name, value, case-insensitive)
// name: especifica el nombre de la constante
// value: especifica el valor de la constante
// case-insensitive: especifica si el nombre de la constante debe ser insensible a mayúsculas y minúsculas. Por defecto es false.
//
// Ejemplo:
define("GREETING", "Welcome to My School!");
//constantes no llevan comillas y son globales
//para llamar una constante se usa el nombre de la constante
echo GREETING;