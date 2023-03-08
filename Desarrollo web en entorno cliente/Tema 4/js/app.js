import { Validate } from "./validate.js";

// Instanciando el validador
const validator = new Validate();

// Recoger el nombre y los apellidos al perder el foco, validarlos y capitalizar
// Obtengo el elemento y añado el listener
document.querySelector("#nomApe").addEventListener("blur", (e) => {
  // Obtengo el elemento de error
  const el = document.querySelector("#nomApeError");
  // Si valida capitalizo la entrada
  if (validator.text(e.target.value)) {
    // Separo las palabras de la entrada y las guardo capitalizadas en un array
    const words = [];
    e.target.value.split(" ").forEach((word, index) => {
      words[index] = `${word.charAt(0).toUpperCase()}${word.slice(1)}`;
    });

    // Uno el array y se lo asigno al value del input
    e.target.value = words.join(" ");

    // Si es valido quito el error
    e.target.classList.add("is-valid");
    e.target.classList.remove("is-invalid");

    // Sino es valido muestro el error
  } else {
    e.target.classList.remove("is-valid");
    e.target.classList.add("is-invalid");
  }
});

// Recoger la edad y validarla mientras se escribe
document.querySelector("#edad").addEventListener("input", (e) => {
  const el = document.querySelector("#edadError");
  if (validator.age(e.target.value)) {
    e.target.classList.add("is-valid");
    e.target.classList.remove("is-invalid");
  } else {
    e.target.classList.remove("is-valid");
    e.target.classList.add("is-invalid");
  }
});

// Recoger la contraseña y validarla mientras se escribe
document.querySelector("#pass").addEventListener("input", (e) => {
  const el = document.querySelector("#passError");

  if (validator.pass(e.target.value)) {
    e.target.classList.add("is-valid");
    e.target.classList.remove("is-invalid");
  } else {
    e.target.classList.remove("is-valid");
    e.target.classList.add("is-invalid");
  }
});
