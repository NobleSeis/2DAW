"use strict";

import { Persona } from "./Persona.js";

// Clase principal
export class Alumno extends Persona {
  // Propiedades
  #anioMatriculado;
  #foto;

  // Constructor
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

  // Getters
  get anioMatriculado() {
    return this.#anioMatriculado;
  }
  get foto() {
    return this.#foto;
  }

  // Setters
  set anioMatriculado(anioMatriculado) {
    if (isNaN(anioMatriculado) || anioMatriculado > 2022) {
      throw "Error: El año de matricula no es válido";
    }
    this.#anioMatriculado = anioMatriculado;
  }
  set foto(foto) {
    this.#foto =
      typeof foto !== "string" || foto.test(/^.+\.(jpg|png)$/)
        ? foto
        : "https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-PNG-Image-File.png";
  }

  // Métodos
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
