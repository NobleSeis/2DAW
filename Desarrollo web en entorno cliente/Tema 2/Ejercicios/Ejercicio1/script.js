"use strict";
let ventana;
let interval;

function windowOpen() {
  clearInterval(interval);
  let ventana = window.open(
    "",
    "mozillaWindow",
    "popup,left=100,top=100,width=320,height=320"
  );
  ventana.document.write('<div>La ventana secundaria se está moviendo</div>');
  interval = setInterval(() => {
    ventana.moveTo(Math.random() * screen.width, Math.random() * screen.height);
  }, 4000);
  return ventana;
}

function stopWindow() {
  clearInterval(interval);
  ventana.document.write('<div>Ventana secundaria stop</div>')
}
