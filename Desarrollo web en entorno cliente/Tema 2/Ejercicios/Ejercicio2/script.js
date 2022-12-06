"use strict";

// Fecha de nacimiento del usuario
const date = prompt("Ingresa tu fecha de nacimiento (mm-dd-aaaa)");

const nacimiento = new Date(date)

// Fecha actual
const hoy = new Date();

// Edad
let edad = hoy.getFullYear() - nacimiento.getFullYear();

let diasRestantes;

// Ya ha pasado el cumpleaños
if (hoy.getMonth() > nacimiento.getMonth()) {
  const proximoCumple = new Date(hoy.getFullYear(), nacimiento.getMonth(), nacimiento.getDate());
  diasRestantes = Math.ceil((proximoCumple - hoy) / (1000 * 60 * 60 * 24));
  diasRestantes += 365;

// Aun no ha pasado el cumpleaños
} else {
  const proximoCumple = new Date(hoy.getFullYear(), nacimiento.getMonth(), nacimiento.getDate());
  diasRestantes = Math.ceil((proximoCumple - hoy) / (1000 * 60 * 60 * 24));
  edad -= 1;
}


// Imprime la edad y la cantidad de días que faltan para el próximo cumpleaños del usuario
if (salida){
  console.log(salida);
} else {
  console.log(`Tienes ${edad} años y faltan ${diasRestantes} días para tu próximo cumpleaños.`);
}
