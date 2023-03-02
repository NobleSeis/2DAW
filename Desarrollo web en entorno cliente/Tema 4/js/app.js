import { Validate } from "./validate.js";

// Instanciando el validador
const validator = new Validate();

// Recoger el nombre y los apellidos al perder el foco, validarlos y capitalizar
function validarNomApe() {
  // Obtengo el elemento y añado el listener
  document.querySelector("#nomApe").addEventListener("blur", (e) => {
    // Si valida capitalizo la entrada
    if (validator.text(e.target.value)) {
      const values = [];
      e.target.value.split(" ").forEach((word, index) => {
        values[index] = `${word.charAt(0).toUpperCase()}${word.slice(1)}`;
      });
      e.target.value = values.join(" ");

      // Sino valida muestro el error
    } else {
      // TODO: Hacer aparecer un span con letras en rojo
      const el = document.querySelector("#nomApeError");
      el.style.color = "red";
      el.innerHTML = "Nombre y apellidos no válidos";
    }
  });
}

// Recoger la edad y validarla mientras se escribe
function validarAge() {
  document.querySelector("#edad").addEventListener("input", (e) => {
    console.log("cambio");
    if (validator.age(e.target.value)) {
      e.target.style.backgroundColor = "green";
    } else {
      e.target.style.backgroundColor = "red";
    }
  });
}

validarNomApe();
validarAge();
