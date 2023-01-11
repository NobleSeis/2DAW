"use strict";
/**
 * @module Persona
 */

/**
 * @class Clase que representa a una persona
 * @public
 */
export class Persona {
  /**
   * Nombre y apellidos
   * @type {string}
   * @private
   */
  #nomApe;

  /**
   * Fecha de nacimiento
   * @type {Date}
   * @private
   */
  #fechaNac;

  /**
   * @constructor
   * @param {string} nomApe Nombre y apellidos
   * @param {string} fechaNac Fecha de nacimiento (será convertida a un objeto Date)
   * @throws {string} Si el nombre no es una cadena o si la fecha es ivalida o anterior a 01-01-1963 o posterior a 31-12-2022
   */
  constructor(nomApe, fechaNac) {
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

    this.#fechaNac = new Date(fechaNac);
    this.#nomApe = nomApe;
  }

  /**
   * Getter de nomApe
   * @function
   * @returns {string} Nombre y apellidos
   */
  get nomApe() {
    return this.#nomApe;
  }

  /**
   * Getter de fechaNac
   * @function
   * @returns {Date} Fecha de nacimiento
   */
  get fechaNac() {
    return this.#fechaNac;
  }

  /**
   * Setter de nomApe
   * @function
   * @param {string} nomApe Nombre y apellidos
   * @throws {string} Si el nombre no es una cadena o es inferior a 5 caracteres
   * @returns {void}
   */
  set nomApe(nomApe) {
    if (typeof nomApe !== "string" || nomApe.length < 5) {
      throw "Error: el nombre y los apellidos debe ser una cadena y tener mínimo 5 caracteres";
    }
    this.#nomApe = nomApe;
  }

  /**
   * Setter de fechaNac
   * @function
   * @param {string} fechaNac Fecha de nacimiento
   * @throws {string} Si la fecha es anterior a 01-01-1963 o posterior a 31-12-2022
   * @returns {void}
   */
  set fechaNac(fechaNac) {
    if (
      fechaNac < new Date("1963-01-01") ||
      fechaNac > new Date("2022-12-31")
    ) {
      throw "Error: La fecha debe estar comprendida entre el 01 enero 1963 y el 31 Diciembre 2022";
    }
    this.#fechaNac = new Date(fechaNac);
  }

  /**
   * Método que transforma los datos de la clase a un formato presentable
   * @returns {string} Tabla html
   */
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
