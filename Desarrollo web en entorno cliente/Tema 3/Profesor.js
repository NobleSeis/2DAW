"use strict";

// Importaciones
import { Persona } from "./Persona.js";

// Reglas de especialidad
const RULES = ["informática", "mecánica", "electrónica", "cocina", "madera"];

// Clase
export class Profesor extends Persona {
  #especialidad;
  #antiguedad;

  constructor(nomApe, fechaNac, especialidad, antiguedad) {
    // Usando el constructor de la clase padre
    try {
      super(nomApe, fechaNac);
    } catch (error) {
      console.log(error);
    }

    this.especialidad(especialidad);
    this.antiguedad(antiguedad);

    //Lanzando errores
    if (
      typeof especialidad !== "string" ||
      RULES.find(especialidad.toLowerCase()) === undefined
    ) {
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
      RULES.find(especialidad.toLowerCase()) === undefined
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
    return `${super.toString()}, Especialidad: ${
      this.especialidad
    }, Antigüedad: ${this.antiguedad}`;
  }
}
