"use strict";
/**@module Alumno */
import { Persona } from "./Persona.js";

/**
 * @class Clase que representa un centro educativo.
 * @extends Persona
 * @public
 */
export class Alumno extends Persona {
  /**
   * Año en el que se matriculó el alumno
   * @type {number}
   * @private
   */
  #anioMatriculado;

  /**
   * Foto de perfil del alumno
   * @type {string}
   * @private
   */
  #foto;

  /**
   * @constructor
   * @param {string} nomApe Nombre del alumno
   * @param {string} fechaNac Año de nacimiento del alumno
   * @param {number} anioMatriculado Año de matriculación del alumno
   * @param {string} foto Foto de perfil del alumno
   * @throws {string} Si los parámetros pasados al constructor no son válidos.
   */
  constructor(nomApe, fechaNac, anioMatriculado, foto) {
    // Llamando al constructor del padre
    try {
      super(nomApe, fechaNac);
    } catch (error) {
      throw error;
    }

    // Comprobando el año de matriculación
    if (isNaN(anioMatriculado) || anioMatriculado > 2022) {
      throw "Error: El año de matricula no es válido";
    }

    // Asignando valores
    this.#anioMatriculado = anioMatriculado;
    this.#foto =
      typeof foto !== "string" || /^.+\.(jpg|png)$/.test(foto)
        ? foto
        : "https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-PNG-Image-File.png";
  }

  /**
   * Getter de anioMatriculado
   * @function
   * @returns {number} Año de matriculación del alumno
   */
  get anioMatriculado() {
    return this.#anioMatriculado;
  }

  /**
   * Getter de foto
   * @function
   * @returns {string} URL con la foto de perfil del alumno
   */
  get foto() {
    return this.#foto;
  }

  /**
   * Setter para anioMatriculado
   * @function
   * @param {number} anioMatriculado Año de matriculación del alumno
   * @throws {string} Si el año no es un número o es mayor a 2022
   * @returns {void}
   */
  set anioMatriculado(anioMatriculado) {
    if (isNaN(anioMatriculado) || anioMatriculado > 2022) {
      throw "Error: El año de matricula no es válido";
    }
    this.#anioMatriculado = anioMatriculado;
  }

  /**
   * Setter para foto
   * @function
   * @param {string} foto URL con la foto del alumno
   * @throws {string} Si la foto no es una cadena válida
   * @returns {void}
   */
  set foto(foto) {
    this.#foto =
      typeof foto !== "string" || foto.test(/^.+\.(jpg|png)$/)
        ? foto
        : "https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-PNG-Image-File.png";
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
      <th>Año de matricula</th>
      <td>${this.anioMatriculado}</td>
    </tr>
    <tr>
      <th>Foto</th>
      <td><img src="${this.foto}"></td>
    </tr>
    </table>`;
  }
}
