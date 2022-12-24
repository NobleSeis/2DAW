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
    if (item.hasOwnProperty(nomGrupo)) {
      this.#aComunidad[0].push(item);
    }

    if (item.hasOwnProperty(especialidad)) {
      this.#aComunidad[1].push(item);
    }
  }

  toString() {
    return `Nombre del centro: ${this.#nombre}, 
    Ciudad del centro: ${this.#ciudad}, 
    Comunidad del centro: ${this.#aComunidad}`;
  }
}
