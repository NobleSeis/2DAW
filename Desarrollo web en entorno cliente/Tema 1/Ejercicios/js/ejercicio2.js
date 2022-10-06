/**
 * @file Tarea 1 - Ejercicio 2 del apartado B - Calificaciones
 * @author José Manuel García Isla <jose.gisla@gmail.com>
 * @see https://github.com/NobleSeis/2DAW
 * @version 1.0
 */

/*
    Se pregunta al usuario por una entrada y se crea un bucle que se repetira
    hasta que dicha entrada sea 0.

    Dentro del bucle se comprueba la entrada y se le asigna un valor acorde a
    una variable dependiendo del caso.

    Por último se muestra ese valor y se vuelve a pedir una entrada nueva.
*/

// Declaración de variables
let salida;
let nota = prompt( 'Introduce la nota' );

// Bucle principal
while ( nota != 0 ) {

    switch ( nota ) {
        case '1':
        case '2':
        case '3':
        case '4':
            salida = 'Insuficiente';
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
            salida = 'Error: La nota debe ser un numero entre 1 y 10 (ambos incluidos)';
    }

    console.log( salida );

    nota = prompt( 'Introduce la nota' );
};