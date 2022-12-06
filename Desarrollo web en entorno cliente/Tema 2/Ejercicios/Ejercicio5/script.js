"use strict";

let seguir = true;
const rexp = /^^([A-ZÑÁÉÍÓÚÜ]\s?)([A-Za-zñÑáéíóúÁÉÍÓÚüÜ]\s?){3,29}\.$/;

while (seguir) {

// Recogiendo los catetos al cuadrado
const entrada = getEntrada();

// Mostrando salida
console.log(`La palabra o frase: ${entrada.slice(0, -1)} ${reverse(entrada).replaceAll(" ", "") === entrada.toLowerCase().slice(0, -1).replaceAll(" ", "") ? 'es un palíndromo' : 'no es un palíndromo'}`)

seguir = confirm('¿Quiere seguir comprobando palíndromos?');
}

// Funciones
function getEntrada(){
  let entrada = prompt('Ingrese una palabra o una frase: ');
  while (!rexp.test(entrada)){
    entrada = prompt('ERROR: La palabra o frase no cumple los requisitos.\nIngrese una palabra o una frase: ');
  }
  return entrada;
}

function reverse(cadena) {
  let alReves = '';
  for (let i = cadena.length -2; i >= 0; i--) {
    alReves += cadena.charAt(i);
  }
  return alReves.toLowerCase();
}
