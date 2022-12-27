"use strict";

// Importaciones
import { Persona } from "./Persona.js";

// Reglas de especialidad
export const especialidades = [
  "informática",
  "mecánica",
  "electrónica",
  "cocina",
  "madera",
];

// Clase
export class Profesor extends Persona {
  #especialidad;
  #antiguedad;

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

  // Getters
  get especialidad() {
    return this.#especialidad;
  }

  get antiguedad() {
    return this.#antiguedad;
  }

  // Setters
  set especialidad(especialidad) {
    if (
      typeof especialidad !== "string" ||
      especialidades.find(especialidad.toLowerCase()) === undefined
    ) {
      throw "Error: Especialidad no válida";
    }
    this.#especialidad = especialidad;
  }

  set antiguedad(antiguedad) {
    if (isNaN(antiguedad)) {
      throw "Error: Antiguedad debe ser un número";
    }
    this.#antiguedad = antiguedad > 0 && antiguedad < 36 ? antiguedad : 35;
  }

  // Métodos
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
