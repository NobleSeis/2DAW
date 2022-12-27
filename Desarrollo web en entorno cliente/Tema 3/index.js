"use strict";

// Importaciones
import { Alumno } from "./Alumno.js";
import { Centro } from "./Centro.js";
import { Grupo } from "./Grupo.js";
import { Profesor, especialidades } from "./Profesor.js";

// Variables
let centro;
let profesores = [];
let alumnos = [];
let grupos = [];

// Generación de profesores
function generarProfesores(aProfesores, nProfesores, prefijo = "Profesor") {
  // Intento crear los profesores
  try {
    for (let i = 1; i <= nProfesores; i++) {
      aProfesores.push(
        new Profesor(
          prefijo + i,
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

// Generación de alumnos
function generarAlumnos(aAlumnos, nAlumnos, prefijo = "Alumno") {
  try {
    for (let i = 1; i <= nAlumnos; i++) {
      let fechaNac = getRandomDate();
      aAlumnos.push(
        new Alumno(
          prefijo + i,
          fechaNac,
          Math.floor(
            // Un alumno no se puede matricular antes de nacer
            Math.random() * (2022 - fechaNac.getFullYear()) +
              fechaNac.getFullYear()
          ),
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

// Generación de grupos
function generarGrupos(
  aGrupos,
  nGrupos,
  tAlumnos,
  prefijo = "Grupo",
  abrev = "GRU"
) {
  try {
    for (let i = 1; i <= nGrupos; i++) {
      aGrupos.push(new Grupo(prefijo + i, abrev + 1, tAlumnos));
    }
  } catch (error) {
    console.log(error);
  }
}

// Añadir alumnos a los grupos (se reparten a partes iguales+)
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
//grupos[0].altaAlumno(new Alumno("Abecedio", "08-19-1994", 1999, "foto"));

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
