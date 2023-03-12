import { Validate } from "./validate.js";

// Instanciando el validador
const validator = new Validate();

// Variables para guardar los resultados
let nomApe;
let edad;
let password;
let estado;
let frutas = [];
let precioFruta;

// Recoger el nombre y los apellidos al perder el foco, validarlos y capitalizar
// Obtengo el elemento y añado el listener
document.querySelector("#nomApe").addEventListener("blur", (e) => {
  // Si valida capitalizo la entrada
  if (validator.text(e.target.value)) {
    // Separo las palabras de la entrada y las guardo capitalizadas en un array
    const words = [];
    e.target.value.split(" ").forEach((word, index) => {
      words[index] = `${word.charAt(0).toUpperCase()}${word.slice(1)}`;
    });

    // Uno el array y se lo asigno al value del input
    e.target.value = words.join(" ");
    nomApe = words.join(" ");

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
  if (validator.age(e.target.value)) {
    edad = e.target.value;
    e.target.classList.add("is-valid");
    e.target.classList.remove("is-invalid");
  } else {
    e.target.classList.remove("is-valid");
    e.target.classList.add("is-invalid");
  }
});

// Recoger la contraseña y validarla mientras se escribe
document.querySelector("#pass").addEventListener("input", (e) => {
  if (validator.pass(e.target.value)) {
    password = e.target.value;
    e.target.classList.add("is-valid");
    e.target.classList.remove("is-invalid");
  } else {
    e.target.classList.remove("is-valid");
    e.target.classList.add("is-invalid");
  }
});

// Recoger todos los checkbox de frutas
const inputsCheckbox = [];
document.querySelectorAll(".fruta").forEach((checkbox) => {
  inputsCheckbox.push(checkbox);
});

// Comprobar si No consume está seleccionado
document.querySelector("#noConsume").addEventListener("change", (e) => {
  // Si está seleccionado se deseleccionan las frutas y las desactivo
  if (e.target.checked) {
    // Guardo No consume en los resultados
    frutas.push("No consume");

    inputsCheckbox.forEach((checkbox) => {
      checkbox.checked = false;
      checkbox.setAttribute("disabled", "disabled");
    });

    // Sino está seleccionado se activan las frutas
  } else {
    inputsCheckbox.forEach((checkbox) => {
      checkbox.removeAttribute("disabled");
    });
  }
});

// Obteniendo opinion del precio de las frutas y guardando el resultado
document.querySelector("#precioFruta").addEventListener("change", (e) => {
  if (e.target.options[e.target.selectedIndex].value) {
    precioFruta = e.target.options[e.target.selectedIndex].value;
  }
});

// Limpiar formulario
document.querySelector("#reset").addEventListener("click", (e) => {
  document.querySelector("#myForm").reset();
});

// Recoger el formulario
document.querySelector("#enviar").addEventListener("click", (e) => {
  // Evitar que el formulario sea enviado de verdad
  e.preventDefault();

  // Obteniendo el input radio seleccionado
  document.getElementsByName("estado").forEach((node) => {
    if (node.checked) {
      estado = node.id;
    }
  });

  // Obteniendo las frutas seleccionadas
  inputsCheckbox.forEach((input) => {
    if (input.checked) {
      frutas.push(input.value);
    }
  });

  // Cogiendo el div de resultados y mostrandolo junto con la salida
  const resultados = document.querySelector("#resultados");
  resultados.classList.remove("d-none");

  // Si un campo no está completado mostrar mensaje de error
  if (
    !nomApe ||
    !edad ||
    !password ||
    !estado ||
    frutas.length < 2 ||
    !precioFruta
  ) {
    // Limpiando formulario y variables
    document.querySelector("#myForm").reset();
    nomApe = "";
    edad = "";
    password = "";
    estado = "";
    frutas = [];
    precioFruta = "";

    resultados.innerHTML = `Uno o varios campos son incorrectos`;
  } else {
    // Mostrar salida con los datos introducidos
    resultados.innerHTML = `
    <ul>
      <li>Nombre y apellidos: ${nomApe}</li> 
      <li>Edad: ${edad}</li> 
      <li>Contraseña: ${password}</li> 
      <li>Estado civil: ${estado}</li>
      <li>Frutas: ${frutas}</li>
      <li>Precio: ${precioFruta}</li>
      `;

    // Limpiando formulario y variables
    document.querySelector("#myForm").reset();
    nomApe = "";
    edad = "";
    password = "";
    estado = "";
    frutas = [];
    precioFruta = "";
  }
});
