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
const MIN = 1;
const MAX = 30;
const MENSAJE = `Introduce un número del ${MIN} al ${MAX} (${FIN} para salir)`;
const ERROR = `ERROR: El número debe estar entre ${MIN} y ${MAX}\n${MENSAJE}`;

// Declaración de variables
let salida;
let entrada = prompt( MENSAJE );

// Bucle principal

while ( entrada != FIN ) {  // Hasta que la entrada sea 0 en este caso

    if ( ( entrada << 0 ) < MIN || ( entrada << 0 ) > MAX ) entrada = prompt( ERROR ); // Se vuelve a pedir la entrada si la anterior no era un número o estaba fuera de rango

        /*
        Explicación de entrada << 0:
        
        El comportamiento real de los operadores bit a bit es desplazar el equivalente binario de la parte izquierda de la expresión tantas posiciones 
        hacia derecha (>>) o izquierda (<<) como el número en la parte derecha de la expresión.

        001010 << 1 == 010100

        Sin embargo, cualquier entrada que no pueda ser convertida a binario, se evaluará a 0.
        Sabiendo eso, consigo convertir cualquier string en un numero como si de la función parseInt() se tratara, con la diferencia de que un string 
        que contenga letras se evalúa a 0 en lugar de NaN.

        '12345' << 0 == 12345
        '123fg' << 0 == 0
    */

    else {  // Entrada correcta

        // Variables (y constante) que se vuelven a declarar en cada iteracción

        const ORIGINAL = entrada;                               // Guardo la entrada del usuario para mostrala luego
        let binario = 0;
        let resto, posicion = 1;

        // Repetiremos las operaciones hasta que el entrada no sea divisible

        while ( entrada != 0 ) {
            resto = entrada % 2;                                // Obtengo el primer digito binario
            entrada = parseInt( entrada / 2 );                  // Divido la entrada para reutilizarla y que no sea un bucle infinito
            binario += resto * posicion;                        // Llevo el digito binario a su posición
            posicion *= 10;                                     // Aumento la posición en un lugar hacia la derecha
        }

        salida = `El binario de ${ORIGINAL} es ${binario}`;                     // Asigno el numero binario a la salida junto con un mensaje
        console.log(salida);                                                    // Muestro la salida
        entrada = prompt('Introduce un número del 1 al 30 (0 para salir)');     // Vuelvo a pedir la entrada para otra iteración
    }
};