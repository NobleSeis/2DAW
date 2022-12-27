"use strict";

// Clase principal
export class Persona {
  // Propiedades
  #nomApe;
  #fechaNac;

  // Constructor
  constructor(nomApe, fechaNac) {
    // Realizando comprobaciones y lanzando errores
    if (typeof nomApe !== "string" || nomApe.length < 5) {
      throw "Error: el nombre y los apellidos debe ser una cadena y tener mínimo 5 caracteres";
    }

    if (
      new Date(fechaNac) == "Invalid Date" ||
      fechaNac < new Date("1963-01-01") ||
      fechaNac > new Date("2022-12-31")
    ) {
      throw "Error: La fecha debe estar comprendida entre el 01 enero 1963 y el 31 Diciembre 2022";
    }

    // Asignando valores
    this.#fechaNac = new Date(fechaNac);
    this.#nomApe = nomApe;
  }

  // Getters
  get nomApe() {
    return this.#nomApe;
  }

  get fechaNac() {
    return this.#fechaNac;
  }

  // Setters
  set nomApe(nomApe) {
    if (typeof nomApe !== "string" || nomApe.length < 5) {
      throw "Error: el nombre y los apellidos debe ser una cadena y tener mínimo 5 caracteres";
    }
    this.#nomApe = nomApe;
  }
  set fechaNac(fechaNac) {
    if (
      fechaNac < new Date("1963-01-01") ||
      fechaNac > new Date("2022-12-31")
    ) {
      throw "Error: La fecha debe estar comprendida entre el 01 enero 1963 y el 31 Diciembre 2022";
    }
    this.#fechaNac = new Date(fechaNac);
  }

  // Métodos
  toString() {
    const options = {
      weekday: "long",
      year: "numeric",
      month: "long",
      day: "numeric",
    };
    return `
      <th>Nombre y apellidos</th>
      <td>${this.nomApe}</td>
    </tr>
    <tr>
      <th>Fecha de nacimiento</th>
      <td>${this.fechaNac.toLocaleDateString("es-ES", options)}</td>`;
  }
}
