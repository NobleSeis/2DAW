"use strict";
/**
 * @file Tarea 1 - Ejercicio 3 del apartado B - Binario
 * @author José Manuel García Isla <jose.gisla@gmail.com>
 * @see https://github.com/NobleSeis/2DAW
 * @version 1.0
 */

/*
    Se pregunta al usuario por una entrada y se crea un bucle que se repetirá hasta que dicha 
    entrada sea 0.

    Si la entrada no es un número, es menor a 1, o es mayor a 30, se muestra un mensaje de error y se repite el 
    bucle.

    Si la entrada es valida:
        - Se guarda la entrada para mostrarla posteriormente.
        - Se crea un bucle que se repetirá hasta que la entrada sea indivisible.
        - Se divide la entrada entre dos y el resto será el primer caracter binario.
        - Se divide la entrada entre dos para volver a calcular el resto.
        - Se multiplica el caracter binario por la potencia de 10 que corresponda a la posicion 
          del caracter actual (1 para la primera posición, 10 para la segunda, 100 para la 
          tercera...).
        - Se muestra el mensaje con el número binario correspondiente a la entrada. 
*/

// Declaracion de constantes

const FIN = 0;
const MIN_VALIDO = 1;
const MAX_VALIDO = 30;
const MENSAJE = `Introduce un número del ${MIN_VALIDO} al ${MAX_VALIDO} (${FIN} para salir)`;
const ERROR = `ERROR: El número debe estar entre ${MIN_VALIDO} y ${MAX_VALIDO}\n${MENSAJE}`;

// Declaración de variables
let salida;
let entrada = prompt(MENSAJE);

while (
  !(parseInt(entrada) < Infinity) ||
  parseInt(entrada) < FIN ||
  parseInt(entrada) > MAX_VALIDO
) {
  entrada = prompt(`${ERROR}`);
}

// Bucle principal

while (parseInt(entrada) !== FIN) {
  // Hasta que la entrada sea 0 en este caso

  // Variables (y constante) que se vuelven a declarar en cada iteracción

  const ORIGINAL = entrada; // Guardo la entrada del usuario para mostrala luego

  let binario = 0,
    resto,
    posicion = 1;

  // Repetiremos las operaciones hasta que el entrada no sea divisible
  while (entrada != 0) {
    resto = entrada % 2; // Obtengo el primer digito binario
    entrada = parseInt(entrada / 2); // Divido la entrada para reutilizarla y que no sea un bucle infinito
    binario += resto * posicion; // Llevo el digito binario a su posición
    posicion *= 10; // Aumento la posición en un lugar hacia la derecha
  }

  console.log(`El binario de ${ORIGINAL} es ${binario}`); // Muestro la salida

  entrada = prompt(MENSAJE);

  // De no ser válida la entrada, se lanza un prompt con el error y se vuelve a pedir hasta que sea válida
  while (
    !(parseInt(entrada) < Infinity) ||
    parseInt(entrada) < FIN ||
    parseInt(entrada) > MAX_VALIDO
  ) {
    entrada = prompt(`${ERROR}`);
  }
}
