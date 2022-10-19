"use strict";
/**
 * @file Tarea 1 - Ejercicio 1 del apartado B - Números naturales
 * @author José Manuel García Isla <jose.gisla@gmail.com>
 * @see https://github.com/NobleSeis/2DAW
 * @version 1.0
 */

/*
    Se pregunta al usuario por una entrada y se crea un bucle que se repetirá hasta
    que dicha entrada sea f o F.

    En cada iteración se comprueba si la entrada es mayor, menor o igual a cero 
    (en cuyo caso se suma a un contador) y se muestra en la consola, además se 
    vuelve a pedir la entrada.

    Si la entrada del usuario no es numérica se muestra un mensaje de error.

    Por último se muestra el conteo de ceros.
*/

// Declaración de constantes

const FIN_1 = "f";
const FIN_2 = "F";
const MENSAJE = `Introduzca un número (${FIN_1} o ${FIN_2} para salir)`;
const ERROR = `ERROR: La entrada debe ser un número o ${FIN_1}|${FIN_2}`;

// Declaración de variables
let ceros = 0;
let entrada = prompt(MENSAJE);
let error;

// Inicio del bucle principal
while (entrada != FIN_1 && entrada != FIN_2) {
  // Fin de programa con f o F en este caso

  let salida;

  // Comprobaciones de mayor, menor o igual a cero
  if (entrada > 0) {
    salida = entrada + " es mayor que 0";
  } else if (entrada < 0) {
    salida = entrada + " es menor que 0";
  } else if (parseInt(entrada) === 0) {
    ceros++;
  }

  // Si la entrada no es válida activar la bandera
  else {
    error = true;
  }

  salida ? console.log(salida) : ""; // Evitando undefined si salimos en la primera iteración

  // De haber un error se lanza un prompt con el error y se vuelve a pedir una entrada sino se lanza un prompt sin error
  if (error) {
    entrada = prompt(`${ERROR}\n${MENSAJE}`);
  } else {
    entrada = prompt(MENSAJE);
  }

  error = false; // resetear la bandera para poder lanzar el prompt correcto
}

console.log("El nº de ceros introducidos ha sido " + ceros); // Mostrando el conteo de ceros
