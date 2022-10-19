"use strict";
/**
 * @file Tarea 1 - Ejercicio 2 del apartado B - Calificaciones
 * @author José Manuel García Isla <jose.gisla@gmail.com>
 * @see https://github.com/NobleSeis/2DAW
 * @version 1.0
 */

/*
    Se pregunta al usuario por una entrada y se crea un bucle que se repetira hasta que
    dicha entrada sea 0.

    Dentro del bucle se comprueba la entrada y se le asigna un valor acorde a una 
    variable dependiendo del caso.

    Por último se muestra ese valor y se vuelve a pedir una entrada nueva.
*/

// Declaración de constantes
const FIN = 0;
const MIN = 1;
const MAX = 10;
const MENSAJE = `Introduce la nota`;
const ERROR = `Error: La nota debe ser un numero entre ${MIN} y ${MAX} (o 0 para salir)\n${MENSAJE}`;

// Declaración de variables

let salida;
let error;
let nota = prompt(MENSAJE);

// Pidiendo la nota hasta que sea válida
while (
  !(parseInt(nota) < Infinity) || // NaN < Infinity == false
  parseInt(nota) < FIN ||
  parseInt(nota) > MAX
) {
  nota = prompt(`${ERROR}`);
}

// Bucle principal - salimos al introducir 0
while (parseInt(nota) !== FIN) {
  error = false; // Reseteando la bandera
  salida = ""; // Reseteando la salida para evitar errores al terminar el programa despues de introducir una nota válida

  switch (nota) {
    case "1":
    case "2":
    case "3":
    case "4":
      salida = "Insuficiente"; // Casos del 1 al 4...
      break;
    case "5":
      salida = "Suficiente";
      break;
    case "6":
      salida = "Bien";
      break;
    case "7":
    case "8":
      salida = "Notable";
      break;
    case "9":
    case "10":
      salida = "Sobresaliente";
      break;
  }

  console.log(`${nota} -> ${salida}`); // Mostrando el resultado

  nota = prompt(MENSAJE);

  // De no ser válida la entrada, se lanza un prompt con el error y se vuelve a pedir hasta que sea válida
  while (
    !(parseInt(nota) < Infinity) ||
    parseInt(nota) < FIN ||
    parseInt(nota) > MAX
  ) {
    nota = prompt(`${ERROR}`);
  }
}
