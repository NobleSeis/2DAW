/*
 * Tarea 1 - Números naturales.
 */

/**La función recibe una entrada, y tiene en cuenta lo siguiente:
 * Si es f o F muestra la cantidad de ceros introducidos.
 * Si es un numero devuelve si es mayor o menor que cero.
 * Si no es un numero da error.
 * Se repite la ejecución hasta introducir una f o F
 * @author José Manuel García Isla <jose.gisla@gmail.com>
 * @param {string | number} input - Entrada proporcionada por el usuario
 * @return {string} Cadena que indica si el numero es mayor, menor, o igual a cero, el conteo de ceros o si la entrada es invalida.
 */
function naturales ( input ) {
    if ( input == 'f' || input == 'F' ){
        return 'El nº de ceros introducidos ha sido ' + ceros;
    } 
    else if ( input > 0 ) {
        return input + ' es mayor que 0';
    } 
    else if ( input < 0 ) {
        return input + ' es menor que 0';
    } 
    else if ( input == 0 ){
        ceros++;
        return 'El número introducido es 0'
    } 
    else {
        return 'Error: debes introducir un numero o f|F para salir'
    }
}

// Ejecucion
let ceros = 0; // Contador de ceros totales
do {
    var entrada = prompt("Introduzca un número (f o F para salir)")
    console.log(naturales(entrada));
} while (entrada != 'F' && entrada != 'f'); // Salir con f o F