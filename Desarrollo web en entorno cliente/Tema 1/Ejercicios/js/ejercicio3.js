/**
 * @file Tarea 1 - Ejercicio 3 del apartado B - Binario
 * @author José Manuel García Isla <jose.gisla@gmail.com>
 * @see https://github.com/NobleSeis/2DAW
 * @version 1.0
 */

/*
    Se pregunta al usuario por una entrada y se crea un bucle que se repetirá hasta que dicha 
    entrada sea 0.

    Si la entrada es menor a 1 o mayor a 30 se muestra un mensaje de error y se repite el 
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
const MIN = 1;
const MAX = 30

// Declaración de variables

let salida;
let entrada = prompt( `Introduce un número del ${MIN} al ${MAX} (${FIN} para salir)` );

// Bucle principal

while ( entrada != FIN ) {

    if ( entrada < MIN || entrada > MAX ) salida = `El número debe estar entre ${MIN} y ${MAX}`;
    else {

        const ORIGINAL = entrada;
        let binario = 0;
        let resto, posicion = 1;

        // Repetiremos las operaciones hasta que el entrada no sea divisible

        while ( entrada != 0 ) {
            resto = entrada % 2; 
            entrada = parseInt( entrada / 2 );
            binario += resto * posicion;
            posicion *= 10;
        }

        salida = `El binario de ${ORIGINAL} es ${binario}`;
    }

    console.log(salida);

    numero = prompt('Introduce un número del 1 al 30 (0 para salir)');
};