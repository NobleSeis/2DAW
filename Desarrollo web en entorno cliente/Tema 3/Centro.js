"use strict";
/**@module Centro */
import { Grupo } from "./Grupo.js";
import { Profesor } from "./Profesor.js";

/**
 * @class Clase que representa un centro educativo.
 * @public
 */
export class Centro {
  /**
   * Nombre del centro
   * @type {string}
   * @private
   */
  #nombre;

  /**
   * Ciudad en la que se encuentra el centro
   * @type {string}
   * @private
   */
  #ciudad;

  /**
   * Array con la comunidad que tiene el centro. Primer índice Grupos, Segundo índice Profesores
   * @type {Array}
   * @private
   */
  #aComunidad = [[], []];

  /**
   * @constructor
   * @param {string} nombre Nombre del centro
   * @param {string} [ciudad=Córdoba] Ciudad en la que se encuentra el centro.
   * @throws {string} Si los parámetros pasados al constructor no son cadenas.
   */
  constructor(nombre, ciudad = "Córdoba") {
    if (typeof nombre !== "string") {
      throw "Error: Nombre no válido";
    }

    if (typeof ciudad !== "string") {
      throw "Error: Ciudad no válida";
    }

    this.#nombre = nombre;
    this.#ciudad = ciudad;
  }

  /**
   * Getter de nombre
   * @function
   * @returns {string} Nombre del centro
   */
  get nombre() {
    return this.#nombre;
  }
  /**
   * Getter de ciudad
   * @function
   * @returns {string} Nombre de la ciudad en la que se encuentra el centro
   */
  get ciudad() {
    return this.#ciudad;
  }
  /**
   * Getter de comunidad
   * @function
   * @returns {Array} Array con los grupos y profesores que tiene el centro
   */
  get aComunidad() {
    return this.#aComunidad;
  }

  /**
   * Setter para nombre
   * @function
   * @param {string} nombre Nombre del centro
   * @throws {string} Si el nombre no es una cadena
   * @returns {void}
   */
  set nombre(nombre) {
    if (typeof nombre !== "string") {
      throw "Error: Nombre no válido";
    }
    this.#nombre = nombre;
  }

  /**
   * Setter para ciudad
   * @function
   * @param {string} ciudad Nombre de la ciudad en la que se encuentra el centro
   * @throws {string} Si la ciudad no es una cadena
   * @returns {void}
   */
  set ciudad(ciudad) {
    if (typeof ciudad !== "string") {
      throw "Error: Ciudad no válida";
    }
    this.#ciudad = ciudad;
  }

  /**
   * Setter para aComunidad
   * @function
   * @param {Array} aComunidad Comunidad del centro
   * @throws {string} Si el parámetro no es un array
   * @returns {void}
   */
  set aComunidad(aComunidad) {
    if (!Array.isArray(aComunidad)) {
      throw "Error: aComunidad no válido";
    }
    this.#aComunidad = aComunidad;
  }

  /**
   * Método para añadir un Grupo o un Profesor a la comunidad del centro
   * @param {Grupo | Profesor} item Grupo o profesor a añadir
   * @throws {string} Si el item no es ni un Grupo ni un Profesor
   */
  addComunidad(item) {
    if (item instanceof Grupo || item instanceof Profesor) {
      if (item instanceof Grupo) {
        this.#aComunidad[0].push(item);
      }

      if (item instanceof Profesor) {
        this.#aComunidad[1].push(item);
      }
    } else {
      throw "Error: El item debe ser un grupo o un profesor";
    }
  }

  /**
   * Método que transforma los datos de la clase a un formato presentable
   * @returns {string} Tabla html
   */
  toString() {
    return `
    <table border=1>
      <tr>
        <th>Nombre del centro</th> 
        <td>${this.#nombre}</td>
      </tr>
      <tr>
        <th>Ciudad del centro</th>
        <td>${this.#ciudad}</td>
      </tr>
      <tr>
        <th>Grupos</th>
        <td>
          ${this.#aComunidad[0]}
        </td>
      </tr>
      <tr>
        <th>Profesores</th>
        <td>${this.#aComunidad[1]}</td>
      </tr>
    </table>`;
  }
}
