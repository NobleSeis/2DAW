"use strict";

/**
 * @module Index
 */

// Importaciones
import { Alumno } from "./Alumno.js";
import { Centro } from "./Centro.js";
import { Grupo } from "./Grupo.js";
import { Profesor, especialidades } from "./Profesor.js";

// Variables
/**
 * Centro
 * @type {Centro}
 */
let centro;

/**
 * Array de profesores
 * @type {Profesor[]}
 */
let profesores = [];

/**
 * Array de alumnos
 * @type {Alumno[]}
 */
let alumnos = [];

/**
 * Array de grupos
 * @type {Grupo[]}
 */
let grupos = [];

/**
 * Función para generar profesores y añadirlos al array de profesores
 * @function
 * @param {Profesor[]} aProfesores Array de profesores donde se añadirán los profesores generados
 * @param {number} nProfesores Número de profesores que se generarán
 * @param {string} prefijo Prefijo para el nombre que tendrán los profesores
 * @return {void}
 */
function generarProfesores(aProfesores, nProfesores, prefijo = "Profesor") {
  // Intento crear los profesores
  try {
    for (let i = 1; i <= nProfesores; i++) {
      aProfesores.push(
        new Profesor(
          prefijo + Math.floor(Math.random() * 100),
          getRandomDate(),
          getRandomSpecialization(especialidades),
          Math.floor(Math.random() * (35 - 1) + 1)
        )
      );
    }
  } catch (error) {
    console.log(error);
  }
}

/**
 * Función para generar alumnos y añadirlos al array de alumnos
 * @function
 * @param {Alumno[]} aAlumnos Array de alumnos donde se añadirán los alumnos generados
 * @param {number} nAlumnos Número de alumnos que se generarán
 * @param {string} prefijo Prefijo para el nombre que tendrán los alumnos
 * @return {void}
 */
function generarAlumnos(aAlumnos, nAlumnos, prefijo = "Alumno") {
  try {
    for (let i = 1; i <= nAlumnos; i++) {
      let fechaNac = getRandomDate();
      aAlumnos.push(
        new Alumno(
          prefijo + Math.floor(Math.random() * 100),
          fechaNac,
          Math.floor(
            // Un alumno no se puede matricular antes de nacer
            Math.random() * (2022 - fechaNac.getFullYear()) +
              fechaNac.getFullYear()
          ),
          // Imagen aleatoria (desde una api de pokemons porque todo es mejor con pokemons)
          `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/${Math.floor(
            Math.random() * (200 - 1) + 1
          )}.png`
        )
      );
    }
  } catch (error) {
    console.log(error);
  }
}

/**
 * Función para generar grupos y añadirlos al array de grupos
 * @function
 * @param {Grupo[]} aGrupos Array de grupos donde se añadirán los grupos generados
 * @param {number} nGrupos Número de Grupos que se generarán
 * @param {string} prefijo Prefijo para el nombre que tendrán los grupos
 * @param {string} abrev Prefijo que tendrá la abreviatura del grupo generado
 * @return {void}
 */
function generarGrupos(
  aGrupos,
  nGrupos,
  tAlumnos,
  prefijo = "Grupo",
  abrev = "GRU"
) {
  try {
    for (let i = 1; i <= nGrupos; i++) {
      aGrupos.push(new Grupo(prefijo + i, abrev + i, tAlumnos));
    }
  } catch (error) {
    console.log(error);
  }
}

/**
 * Función para repartir los alumnos en grupos a partes iguales
 * @function
 * @param {Grupo[]} aGrupos Array de grupos
 * @param {Alumno[]} aAlumnos Array de alumnos
 */
function addAlumnos(aGrupos, aAlumnos) {
  let alumnosPorGrupo =
    aGrupos.length > 0 ? Math.floor(aAlumnos.length / aGrupos.length) : 0;
  for (
    let grupo = 0, nAlumnos = 0;
    grupo < grupos.length;
    grupo++, nAlumnos += alumnosPorGrupo
  ) {
    grupos[grupo].aAlumnos = alumnos.slice(
      nAlumnos,
      nAlumnos + alumnosPorGrupo
    );
  }
}

// Creación de un centro
try {
  centro = new Centro("IES Trassierra");
} catch (error) {
  console.log(error);
}

// Creación de 3 profesores
generarProfesores(profesores, 3);

// Creación de 10 alumnos 5 para cada grupo
generarAlumnos(alumnos, 10);

// Creación de 2 grupos
generarGrupos(grupos, 2, 20);

// Añadiendo alumnos a los grupos
addAlumnos(grupos, alumnos);

// Para comprobar que funciona el método ordenar
/*
try{
  grupos[0].altaAlumno(new Alumno("Abecedio", "08-19-1994", 1999, "foto"));
} catch (error) {
  console.log(error);
}
*/

// Ordenando alumnos por nombre
for (let grupo in grupos) {
  grupos[grupo].ordenarAlumnos();
}

// Agregando grupos y profesores al centro
// Grupos
for (let grupo in grupos) {
  centro.addComunidad(grupos[grupo]);
}
// Profesores
for (let profesor in profesores) {
  centro.addComunidad(profesores[profesor]);
}

// Mostrando centro
// Normalmente crearia una tabla en html y usaría los getters para colocar cada
// cosa en su sitio, pero como la actividad pedia hacer uso del toString pues he
// optado por hacerlo así
document.body.onload = () => document.write(centro.toString());

// Funciones de ayuda
// Creación de fechas aleatorias entre el 1/1/1963 al 31/12/2022
function getRandomDate() {
  return new Date(
    Math.round(Math.random() * (1672444800000 - -220924800000) + -220924800000)
  );
}
// Especialidad aleatoria para profesores
function getRandomSpecialization(array) {
  return array[Math.floor(Math.random() * array.length)];
}
