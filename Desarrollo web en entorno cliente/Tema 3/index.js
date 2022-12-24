"use strict";

// Importaciones
import { Alumno } from "./Alumno.js";
import { Centro } from "./Centro.js";
import { Grupo } from "./Grupo.js";
import { Persona } from "./Persona.js";
import { Profesor } from "./Profesor.js";

let centro1 = new Centro("IES Trassierra");

let profesor1 = new Profesor("José Manuel García Isla", "");

console.log(centro1.toString());
