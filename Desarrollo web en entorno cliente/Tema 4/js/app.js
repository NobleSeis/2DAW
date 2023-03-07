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
    const values = [];
    e.target.value.split(" ").forEach((word, index) => {
      values[index] = `${word.charAt(0).toUpperCase()}${word.slice(1)}`;
    });
    e.target.value = values.join(" ");

    // Si es valido quito el error
    el.classList.add("d-none");

    // Sino valida muestro el error
  } else {
    el.classList.remove("d-none");
  }
});

// Recoger la edad y validarla mientras se escribe
document.querySelector("#edad").addEventListener("input", (e) => {
  const el = document.querySelector("#edadError");
  if (validator.age(e.target.value)) {
    e.target.style.color = "green";
    el.classList.add("d-none");
  } else {
    e.target.style.color = "red";
    el.classList.remove("d-none");
  }
});

// Recoger la contraseña y validarla mientras se escribe
document.querySelector("#pass").addEventListener("input", (e) => {
  const el = document.querySelector("#passError");

  if (validator.pass(e.target.value)) {
    el.classList.add("d-none");
  } else {
    el.classList.remove("d-none");
  }
});
