"use strict";

let seguir = true;

while (seguir) {

// Recogiendo los catetos al cuadrado
const cuadradoCateto1 = Math.pow(getCateto(1), 2);
const cuadradoCateto2 = Math.pow(getCateto(2), 2);

// Calculando la hipotenusa
const h = Math.sqrt(cuadradoCateto1 + cuadradoCateto2);

// Mostrando salida
console.log(`La hipotenusa del cateto 1: ${Math.sqrt(cuadradoCateto1)}, y el cateto 2: ${Math.sqrt(cuadradoCateto2)}, es: ${h.toFixed(2)}`);

seguir = confirm('¿Quiere seguir calculando?');
}

// Funciones
function getCateto(number){
  let entrada = parseFloat(prompt(`Ingrese el cateto ${number}: `));
  while (isNaN(entrada) || entrada <= 0){
    entrada = prompt(`ERROR:\nIngrese el cateto ${number}: `);
  }
  return parseFloat(entrada);
}