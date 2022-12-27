import { Grupo } from "./Grupo.js";
import { Profesor } from "./Profesor.js";

export class Centro {
  #nombre;
  #ciudad;
  #aComunidad = [[], []];

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

  // Getters
  get nombre() {
    return this.#nombre;
  }

  get ciudad() {
    return this.#ciudad;
  }

  get aComunidad() {
    return this.#aComunidad;
  }

  // Setters
  set nombre(nombre) {
    if (typeof nombre !== "string") {
      throw "Error: Nombre no válido";
    }
    this.#nombre = nombre;
  }

  set ciudad(ciudad) {
    if (typeof ciudad !== "string") {
      throw "Error: Ciudad no válida";
    }
    this.#ciudad = ciudad;
  }

  set aComunidad(aComunidad) {
    if (!Array.isArray(aComunidad)) {
      throw "Error: aComunidad no válido";
    }
    this.#aComunidad = aComunidad;
  }

  // Métodos
  addComunidad(item) {
    if (item instanceof Grupo) {
      this.#aComunidad[0].push(item);
    }

    if (item instanceof Profesor) {
      this.#aComunidad[1].push(item);
    }
  }

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
