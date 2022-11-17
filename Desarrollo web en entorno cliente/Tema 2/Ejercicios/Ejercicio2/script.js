"use strict";

let date = prompt("Introduce tu fecha de nacimiento (dd-mm-aaaa)");

while (!Date.parse(date)) {
  date = prompt("Introduce tu fecha de nacimiento");
}

// Mostrando edad TODO
console.log(new Date(Date.now()).getFullYear() - new Date(date).getFullYear());

// Dias hasta su proximo cumpleaños
if (
  new Date(date).getFullYear() +
    (new Date(Date.now()).getFullYear() - new Date(date).getFullYear()) >
  new Date(Date.now()).getFullYear()
) {
  let dif = new Date(Date.now()).getTime() - new Date(date).getTime();
  console.log(Math.floor(dif / (1000 * 60 * 60 * 24)));
}
