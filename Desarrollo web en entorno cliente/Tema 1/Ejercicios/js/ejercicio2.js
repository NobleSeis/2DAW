/**
 * @file Tarea 1 - Ejercicio 2 del apartado B - Calificaciones
 * @author José Manuel García Isla <jose.gisla@gmail.com>
 * @see https://github.com/NobleSeis/2DAW
 * @version 1.0
 */

/**
 * Esta función recibe una calificación del 1-10 y devuelve una cadena que representa 
 * la calificación cualitativamente.
 * @param {string} nota Nota a representar de forma cualitativa.
 * @return {string} Cadena que representa cualitativamente la nota dada o mensajes de información.
 */
function calificaciones ( nota ) {
    if (nota > 10 || nota < 0) return 'La nota debe ser entre 1 y 10';
    if (nota == 0) return 'Terminando ejecución'
    switch (nota) {
        case '1':
        case '2':
        case '3':
        case '4':
            return 'Insuficiente';
        case '5':
            return 'Suficiente';
        case '6':
            return 'Bien';
        case '7':
        case '8':
            return 'Notable';
        case '9':
        case '10':
            return 'Sobresaliente';
        default:
            return 'Error: La nota debe ser un numero';
    }
}

// Ejecución
do {
    var nota = prompt('Introduce la nota');
    console.log(calificaciones(nota));
} while (nota != 0);