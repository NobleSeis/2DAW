/**
 * @file Tarea 1 - Ejercicio 1 del apartado B - Números naturales
 * @author José Manuel García Isla <jose.gisla@gmail.com>
 * @see https://github.com/NobleSeis/2DAW
 * @version 1.0
 */

/*
    Se pregunta al usuario por una entrada y se crea un bucle
    que se repetirá hasta que dicha entrada sea f o F.

    En cada iteración se comprueba si la entrada es mayor, menor
    o igual a cero (en cuyo caso se suma a un contador) y se 
    muestra en la consola, además se vuelve a pedir la entrada.

    Si la entrada del usuario no es numérica se muestra un mensaje
    de error.

    Por último se muestra el conteo de ceros.
*/

// Declaración de constantes
const FIN_1 = 'f';
const FIN_2 = 'F';

// Declaración de variables
let ceros = 0;
let salida;
let entrada = prompt( `Introduzca un número (${FIN_1} o ${FIN_2} para salir)` );

// Bucle principal
while ( entrada != FIN_1 && entrada != FIN_2 ){ 

    if ( entrada > 0 ) {
        salida = entrada + ' es mayor que 0';
    } 
    else if ( entrada < 0 ) {
        salida = entrada + ' es menor que 0';
    } 
    else if ( entrada == 0 ){
        ceros++;
        salida = 'El número introducido es 0';
    } else {
        salida = `Debes introducir un número o ${FIN_1}|${FIN_2} para salir`;
    }

    console.log( salida );

    entrada = prompt( `Introduzca un número (${FIN_1} o ${FIN_2} para salir)` ); 
};

console.log( 'El nº de ceros introducidos ha sido ' + ceros );