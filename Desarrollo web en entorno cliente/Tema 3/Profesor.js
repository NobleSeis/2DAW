"use strict";
/**@module Profesor */
import { Persona } from "./Persona.js";

// Especialidades
export const especialidades = [
  "informática",
  "mecánica",
  "electrónica",
  "cocina",
  "madera",
];

/**
 * @class Clase que representa un profesor
 * @extends Persona
 * @public
 */
export class Profesor extends Persona {
  /**
   * Especialidad del profesor
   * @type {string}
   * @private
   */
  #especialidad;

  /**
   * Tiempo (en años) que lleva el profesor como profesor
   * @type {string}
   * @private
   */
  #antiguedad;

  /**
   * @constructor
   * @param {string} nomApe Nombre del profesor
   * @param {string} fechaNac Fecha de nacimiento del profesor en formato mm/dd/yyyy
   * @param {string} especialidad Especialidad del profesor, debe estar en la lista de especialidades
   * @param {number} antiguedad Tiempo (en años) que lleva el profesor ejerciendo
   * @throws {string} Si los parámetros pasados al constructor no son válidos.
   */
  constructor(nomApe, fechaNac, especialidad, antiguedad) {
    // Usando el constructor de la clase padre
    try {
      super(nomApe, fechaNac);
    } catch (error) {
      throw error;
    }

    //Lanzando errores
    if (!especialidades.find((rule) => rule == especialidad.toLowerCase())) {
      throw "Error: Especialidad no válida";
    }
    if (isNaN(antiguedad)) {
      throw "Error: Antiguedad debe ser un número";
    }

    // Asignando valores
    this.#antiguedad = antiguedad > 0 && antiguedad < 36 ? antiguedad : 35;
    this.#especialidad = especialidad;
  }

  /**
   * Getter de especialidad
   * @function
   * @returns {string} Especialidad del profesor
   */
  get especialidad() {
    return this.#especialidad;
  }

  /**
   * Getter de antigüedad
   * @function
   * @returns {number} Años que lleva el profesor ejerciendo
   */
  get antiguedad() {
    return this.#antiguedad;
  }

  /**
   * Setter para especialidad
   * @function
   * @param {string} especialidad Especialidad del profesor
   * @throws {string} Si la especialidad no está en la lista de especialidades
   * @returns {void}
   */
  set especialidad(especialidad) {
    if (
      typeof especialidad !== "string" ||
      especialidades.find(especialidad.toLowerCase()) === undefined
    ) {
      throw "Error: Especialidad no válida";
    }
    this.#especialidad = especialidad;
  }

  /**
   * Setter para antigüedad
   * @function
   * @param {number} antiguedad Años que lleva el profesor ejerciendo
   * @throws {string} Si la antigüedad no es un número
   * @returns {void}
   */
  set antiguedad(antiguedad) {
    if (isNaN(antiguedad)) {
      throw "Error: Antiguedad debe ser un número";
    }
    this.#antiguedad = antiguedad > 0 && antiguedad < 36 ? antiguedad : 35;
  }

  /**
   * Método que transforma los datos de la clase a un formato presentable
   * @returns {string} Tabla html
   */
  toString() {
    return `
    <table border=1>
    <tr>${super.toString()}</tr>
    <tr>
      <th>Especialidad</th>
      <td>${this.especialidad}</td>
    </tr>
    <tr>
      <th>Antigüedad</th>
      <td> ${this.antiguedad}</td>
    </tr>
    </table>`;
  }
}
