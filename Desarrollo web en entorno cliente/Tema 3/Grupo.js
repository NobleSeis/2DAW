"use strict";
/**@module Grupo */

import { Alumno } from "./Alumno.js";

/**
 * @class Clase que representa un grupo de alumnos
 * @public
 */
export class Grupo {
  /**
   * Nombre del grupo
   * @type {string}
   * @private
   */
  #nomGrupo;

  /**
   * Abreviatura del grupo
   * @type {string}
   * @private
   */
  #grupo;

  /**
   * Número máximo de alumnos que puede tener el grupo
   * @type {string}
   * @private
   */
  #nAlumnos;

  /**
   * Array con los alumnos que tiene el grupo
   * @type {Alumno[]}
   * @private
   */
  #aAlumnos;

  /**
   * @constructor
   * @param {string} nomGrupo Nombre del grupo
   * @param {string} grupo Abreviatura del grupo (4 caracteres)
   * @throws {string} Si los parámetros nomGrupo y grupo no son cadenas o nAlumnos no es un número comprendido entre el 20 y el 30.
   */
  constructor(nomGrupo, grupo, nAlumnos) {
    if (typeof nomGrupo != "string" || nomGrupo.trim() === "") {
      throw "Error: nombre de grupo no válido";
    }
    if (typeof grupo != "string" || grupo.length > 4) {
      throw "Error: abreviatura de grupo no válida";
    }
    if (isNaN(nAlumnos) || nAlumnos < 20 || nAlumnos > 30) {
      throw "Error: número de alumnos no válido";
    }

    // Setear los valores
    this.#nomGrupo = nomGrupo.charAt(0).toUpperCase() + nomGrupo.slice(1);
    this.#grupo = grupo.toUpperCase();
    this.#nAlumnos = nAlumnos;
  }

  /**
   * Getter de nomGrupo
   * @function
   * @returns {string} Nombre del grupo
   */
  get nomGrupo() {
    return this.#nomGrupo;
  }

  /**
   * Getter de grupo
   * @function
   * @returns {string} Abreviatura del grupo
   */
  get grupo() {
    return this.#grupo;
  }

  /**
   * Getter de nAlumnos
   * @function
   * @returns {number} Número máximo de alumnos que permite el grupo
   */
  get nAlumnos() {
    return this.#nAlumnos;
  }

  /**
   * Getter de aAlumnos
   * @function
   * @returns {Alumno[]} Array con los alumnos del grupo
   */
  get aAlumnos() {
    return this.#aAlumnos;
  }

  /**
   * Setter de nomGrupo
   * @function
   * @param {string} nomGrupo Nuevo nombre del grupo
   * @throws {string} Si el nombre del grupo no es una cadena o es una cadena vacia
   * @returns {void}
   */
  set nomGrupo(nomGrupo) {
    if (typeof nomGrupo != "string" || nomGrupo.trim() === "") {
      throw "Error: nombre de grupo no válido";
    }

    // Setear el valor capitalizado
    this.#nomGrupo = nomGrupo.charAt(0).toUpperCase() + nomGrupo.slice(1);
  }

  /**
   * Setter de grupo
   * @function
   * @param {string} grupo Nueva abreviatura del grupo
   * @throws {string} Si la abreviatura del grupo no es una cadena o está tiene más de 4 caracteres
   * @returns {void}
   */
  set grupo(grupo) {
    if (typeof grupo != "string" || grupo.length() > 4) {
      throw "Error: abreviatura de grupo no válida";
    }

    // Se guarda el valor en mayúsculas
    this.#grupo = grupo.toUpperCase();
  }

  /**
   * Setter de nAlumnos
   * @function
   * @param {number} nAlumnos Nuevo límite máximo de alumnos que acepta el grupo
   * @throws {string} Si el número máximo de alumnos no es un número o esté es menor a 20 o mayor a 30
   * @returns {void}
   */
  set nAlumnos(nAlumnos) {
    if (isNaN(nAlumnos) || nAlumnos < 20 || nAlumnos > 30) {
      throw "Error: número de alumnos no válido";
    }

    this.#nAlumnos = nAlumnos;
  }

  /**
   * Setter de aAlumnos
   * @function
   * @param {Alumno[]} aAlumnos Nuevo array con los alumnos del grupo
   * @throws {string} Si el array de alumnos no es un array o este contiene un número de alumnos superior a nAlumnos
   * @returns {void}
   */
  set aAlumnos(aAlumnos) {
    if (!Array.isArray(aAlumnos) || aAlumnos.length > this.#nAlumnos) {
      throw "Error: array de alumnos no válido";
    }
    this.#aAlumnos = aAlumnos;
  }

  /**
   * Método para añadir un nuevo alumno al grupo
   * @param {Alumno} alumno Alumno que se añadirá al grupo
   * @throws {string} Si el grupo está completo
   * @returns {boolean} True si se ha añadido el alumno correctamente, false sino
   */
  altaAlumno(alumno) {
    // Caben más alumnos en el grupo?
    if (this.#aAlumnos.length >= this.#nAlumnos) {
      throw "Error: El grupo está completo";
    }
    // Sino existe el alumno en el array lo añade
    if (
      this.#aAlumnos.findIndex((item) => item.nomApe === alumno.nomApe) !== -1
    ) {
      return false;
    } else {
      this.#aAlumnos.push(alumno);
    }
    return true;
  }

  /**
   * Método para eliminar un alumno del grupo
   * @param {Alumno} alumno Alumno que se eliminará del grupo
   * @throws {string} Si el grupo no tiene alumnos o si el parámetro pasado no es un alumno
   * @returns {boolean} True si se ha eliminado el alumno correctamente, false sino
   */
  eliminarAlumno(alumno) {
    if (this.#aAlumnos.length === 0) {
      throw "Error: El grupo no tiene alumnos";
    }
    if (alumno instanceof Alumno === false) {
      throw "Error: El parámetro debe ser un alumno";
    }

    // Si existe el alumno con nombre y apellidos dados, lo elimina
    return this.#aAlumnos.some((item, index) => {
      if (item.nomApe === alumno.nomApe) {
        this.#aAlumnos.splice(index, 1);
        return true;
      }
    });
  }

  /**
   * Método para ordenar alfabeticamente los alumnos del grupo
   * @function
   * @returns {void}
   */
  ordenarAlumnos() {
    // Ordenando elementos por orden alfabetico del nombre y apellidos
    this.#aAlumnos.sort((a, b) => {
      if (a.nomApe < b.nomApe) {
        return -1;
      }
      if (a.nomApe > b.nomApe) {
        return 1;
      }
      return 0;
    });
  }

  /**
   * Método que transforma los datos de la clase a un formato presentable
   * @returns {string} Tabla html
   */
  toString() {
    return `
    <table border=1>
    <tr>
      <th>Grupo</th>
      <td>${this.nomGrupo} - ${this.grupo}</td>
    </tr>
    <tr>
      <th>Nº de alumnos</th>
      <td>${this.nAlumnos} </td>
    </tr>
    <tr>
      <th>Alumnos</th>
      <td>${this.aAlumnos}</td>
    </tr>
    </table>`;
  }
}
