"use strict";

export class Grupo {
  // Propiedades
  #nomGrupo;
  #grupo;
  #nAlumnos;
  #aAlumnos;

  constructor(nomGrupo, grupo, nAlumnos) {
    // Comprobaciones
    if (typeof nomGrupo != "string" || nomGrupo.trim() === "") {
      throw "Error: nombre de grupo no válido";
    }
    if (typeof grupo != "string" || grupo.length() > 4) {
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

  // Getters
  get nomGrupo() {
    return this.#nomGrupo;
  }

  get grupo() {
    return this.#grupo;
  }

  get nAlumnos() {
    return this.#nAlumnos;
  }

  get aAlumnos() {
    return this.#aAlumnos;
  }

  // Setters
  set nomGrupo(nomGrupo) {
    if (typeof nomGrupo != "string" || nomGrupo.trim() === "") {
      throw "Error: nombre de grupo no válido";
    }

    // Setear el valor capitalizado
    this.#nomGrupo = nomGrupo.charAt(0).toUpperCase() + nomGrupo.slice(1);
  }

  set grupo(grupo) {
    if (typeof grupo != "string" || grupo.length() > 4) {
      throw "Error: abreviatura de grupo no válida";
    }

    // Se guarda el valor en mayúsculas
    this.#grupo = grupo.toUpperCase();
  }

  set nAlumnos(nAlumnos) {
    if (isNaN(nAlumnos) || nAlumnos < 20 || nAlumnos > 30) {
      throw "Error: número de alumnos no válido";
    }

    this.#nAlumnos = nAlumnos;
  }

  set aAlumnos(aAlumnos) {
    if (!Array.isArray(aAlumnos) || aAlumnos.length() > 30) {
      throw "Error: array de alumnos no válido";
    }
  }

  // Métodos
  altaAlumno(alumno) {
    // Sino existe el alumno en el array lo añade
    if (this.#aAlumnos.findIndex(alumno) !== -1) {
      return false;
    } else {
      this.#aAlumnos.push(alumno);
    }
    return true;
  }

  eliminarAlumno(nomApe) {
    if (typeof nomApe != "string") {
      throw "Error: nombre y apellidos no válidos";
    }
    // Si existe el alumno con nombre y apellidos dados, lo elimina
    return this.#aAlumnos.some((alumno, index) => {
      if (alumno.nomApe === nomApe) {
        this.#aAlumnos.splice(index, 1);
        return true;
      }
    });
  }

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

  toString() {
    return `Grupo: ${this.nomGrupo} - ${this.grupo}, Nº de alumnos: ${this.nAlumnos}, Alumnos: ${this.aAlumnos}`;
  }
}
