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
const MENSAJE = `Introduce la nota`;
const ERROR = `Error: La nota debe ser un numero entre 1 y 10 (ambos incluidos)`;

// Declaración de variables

let salida;
let nota;
let error;

// Bucle principal
do {

    // De haber un error se lanza un prompt con el error y se vuelve a pedir una entrada
    if ( error ) {
        nota = prompt( `${ ERROR }\n${ MENSAJE }` );
    } 
    // Si todo está correcto se muestra la salida y se vuelve a pedir una entrada sin aviso de error
    else {
        nota = prompt( MENSAJE );
    }
    
    error = false;                              // Reseteando la bandera
    salida = '';                                // Reseteando la salida para evitar errores al terminar el programa despues de introducir una nota válida
    
    switch ( nota ) {
        case '1':
        case '2':
        case '3':
        case '4':
            salida = 'Insuficiente';            // Casos del 1 al 4...
            break;
        case '5':
            salida = 'Suficiente';             
            break;
        case '6':
            salida = 'Bien';
            break;
        case '7':
        case '8':
            salida = 'Notable';
            break;
        case '9':
        case '10':
            salida = 'Sobresaliente';
            break;
        default:
            error = true;                       // Si la entrada no es válida error
    }

    salida ? console.log( `${ nota } -> ${ salida }` ) : '';        // Evitando undefined si salimos en la primera iteración

} while ( parseInt( nota ) !== 0 );                                 // Salimos al introducir 0