"use strict";
let ventana;
let interval;

function windowOpen() {
  clearInterval(interval);
  let ventana = window.open(
    "window.html",
    "mozillaWindow",
    "popup,left=100,top=100,width=320,height=320"
  );
  interval = setInterval(() => {
    ventana.moveTo(Math.random() * screen.width, Math.random() * screen.height);
  }, 4000);
  return ventana;
}

function stopWindow() {
  clearInterval(interval);
  ventana.document.querySelector("#texto").innerHTML =
    "Ventana secundaria stop";
}
