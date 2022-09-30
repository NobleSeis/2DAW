/**
 * @file Tarea 1 - Ejercicio 3 del apartado B - Binario
 * @author José Manuel García Isla <jose.gisla@gmail.com>
 * @version 1.0
 */
/**
 * Esta función recibe un numero entero positivo y lo convierte en binario
 * @author José Manuel García Isla <jose.gisla@gmail.com>
 * @param {number} numero Número que va a ser representado en binario
 * @return {number} Representación en binario del número dado
 */
 function aBinario(numero) {
    if (numero == 0) return 'Saliendo...';
    if (numero < 0 || numero > 30) return 'El número debe estar entre 1 y 30';
    let original = numero; // Para mostrarlo luego
    let binario = 0;
    let resto, posicion = 1;

    // Repetiremos las operaciones hasta que el numero no sea divisible
    while (numero != 0) {
        resto = numero % 2; // Digitos binarios
        numero = parseInt(numero / 2); // Divido el número a la mitad para volver a usarlo
        binario += resto * posicion; // Coloco el digito binario en la posicion que corresponda
        posicion *= 10; // Aumento en 1 la poscion (de unidades a decenas, luego centenas...)
    }
    return 'El binario de ' + original + ' es ' + binario;
}

do{
    var numero = prompt('Introduce un número del 1 al 30 (0 para salir)');
    console.log(aBinario(numero));
} while (numero != 0);