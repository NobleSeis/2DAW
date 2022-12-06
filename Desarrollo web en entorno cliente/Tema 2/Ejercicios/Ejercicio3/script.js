"use strict";
const MIN = 10;
const MAX = 101; // Por los calculos 101 quiere decir que el maximo será 100

let partidasGanadas = 0;
let partidasPerdidas = 0;

let jugar = true;

while (jugar) {

// Generando aleatorios
let a = randomNumber(MIN, MAX);
let b = randomNumber(MIN, MAX);

while (a === b) {
  b = randomNumber(MIN, MAX);
}

// Recogiendo la apuesta del usuario
let entrada = getApuesta();

// Comprobando ganador
console.log(`A: ${a}`);
console.log(`B: ${b}`);
console.log(`Usted a apostado por: ${entrada.toUpperCase()}`);

if (comprobarGanador(entrada, a, b)){
  partidasGanadas++ 
  console.log('¡HA GANADO LA PARTIDA!');
} else {
  partidasPerdidas++;
  console.log('HA PERDIDO LA PARTIDA...');
}

console.log(`Lleva ${partidasGanadas} partidas ganadas y ${partidasPerdidas} partidas perdidas`)

jugar = confirm('¿Quiere jugar otra partida?');

}

// Funciones
function randomNumber(min, max) {
  return Math.floor(Math.random() * (max - min) + min);
}

function getApuesta(){
  let entrada = prompt('Elige tu apuesta (A o B)');

  // Leí al final que no se permiten arrays, pero al ser una simple comprobación lo he dejado
  // me parece mas limpio así que una cuadruple comprobacion en un if
  while (!['a','b','A','B'].includes(entrada)){
    entrada = prompt('ERROR:\nElige tu apuesta (A o B)');
  }
  return entrada.toLowerCase();
}

function comprobarGanador(entrada, a, b) {
  if (entrada === 'a') {
    return a > b;
  } else {
    return b > a;
  }
}