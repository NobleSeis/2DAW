<?php
// Debo encontrar una forma mas escalable para validar los datos, esto se puede ir de las manos
// si hay muchos campos que validar en la aplicación...

// Funcion que valida los datos
function validate($array)
{
  $salida = [];
  foreach ($array as $key => $value) {
    switch ($key) {

        // Datos
      case 'nombre':
        $salida['nombre'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array("options" => array("regexp" => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ]\s*)+$/"))
        );
        break;
      case 'email':
        $salida['email'] = filter_var($value, FILTER_VALIDATE_EMAIL);
        break;
      case 'telefono':
        $salida['telefono'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array("options" => array("regexp" => "/^\d{9}$/"))
        );
        break;
      case 'url':
        $salida['url'] = filter_var($value, FILTER_VALIDATE_URL);
        break;
      case 'consulta':
        $salida['consulta'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array("options" => array("regexp" => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ\d]\s*)+$/"))
        );
        break;
      case 'github':
        $salida['github'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array("options" => array("regexp" => "/^[a-zA-Z\d]{0,38}$/"))
        );
        break;

        // Dirección
      case 'calle':
        $salida['calle'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array('options' => array('regexp' => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ]\s*)+$/"))
        );
        break;
      case 'numero':
        $salida['numero'] = filter_var(
          $value,
          FILTER_VALIDATE_INT
        );
        break;
      case 'poblacion':
        $salida['poblacion'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array('options' => array('regexp' => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ]\s*)+$/"))
        );
        break;
      case 'provincia':
        $salida['provincia'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array('options' => array('regexp' => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ]\s*)+$/"))
        );
        break;

        // Habilidades
      case 'habilidad1':
        $salida['habilidad1'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array('options' => array('regexp' => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ]\s*)+$/"))
        );
        break;
      case 'habilidad1Range':
        $salida['habilidad1Range'] = filter_var(
          $value,
          FILTER_VALIDATE_INT
        );
        break;
      case 'habilidad2':
        $salida['habilidad2'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array('options' => array('regexp' => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ]\s*)+$/"))
        );
        break;
      case 'habilidad2Range':
        $salida['habilidad2Range'] = filter_var(
          $value,
          FILTER_VALIDATE_INT
        );
        break;
      case 'habilidad3':
        $salida['habilidad3'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array('options' => array('regexp' => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ]\s*)+$/"))
        );
        break;
      case 'habilidad3Range':
        $salida['habilidad3Range'] = filter_var(
          $value,
          FILTER_VALIDATE_INT
        );
        break;
      case 'habilidad4':
        $salida['habilidad4'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array('options' => array('regexp' => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ]\s*)+$/"))
        );
        break;
      case 'habilidad4Range':
        $salida['habilidad4Range'] = filter_var(
          $value,
          FILTER_VALIDATE_INT
        );
        break;

        // Estudios
      case 'centro1':
        $salida['centro1'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array('options' => array('regexp' => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ]\s*)+$/"))
        );
        break;
      case 'estudios1':
        $salida['estudios1'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array('options' => array('regexp' => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ]\s*)+$/"))
        );
        break;
      case 'start_at_1':
        $salida['start_at_1'] = filter_var(
          $value,
          FILTER_VALIDATE_INT
        );
        break;
      case 'ends_at_1':
        $salida['ends_at_1'] = filter_var(
          $value,
          FILTER_VALIDATE_INT
        );
        break;
      case 'centro2':
        $salida['centro2'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array('options' => array('regexp' => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ]\s*)+$/"))
        );
        break;
      case 'estudios2':
        $salida['estudios2'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array('options' => array('regexp' => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ]\s*)+$/"))
        );
        break;
      case 'start_at_2':
        $salida['start_at_2'] = filter_var(
          $value,
          FILTER_VALIDATE_INT
        );
        break;
      case 'ends_at_2':
        $salida['ends_at_2'] = filter_var(
          $value,
          FILTER_VALIDATE_INT
        );
        break;
      case 'centro3':
        $salida['centro3'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array('options' => array('regexp' => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ]\s*)+$/"))
        );
        break;
      case 'estudios3':
        $salida['estudios3'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array('options' => array('regexp' => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ]\s*)+$/"))
        );
        break;
      case 'start_at_3':
        $salida['start_at_3'] = filter_var(
          $value,
          FILTER_VALIDATE_INT
        );
        break;
      case 'ends_at_3':
        $salida['ends_at_3'] = filter_var(
          $value,
          FILTER_VALIDATE_INT
        );
        break;
      case 'centro4':
        $salida['centro4'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array('options' => array('regexp' => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ]\s*)+$/"))
        );
        break;
      case 'estudios4':
        $salida['estudios4'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array('options' => array('regexp' => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ]\s*)+$/"))
        );
        break;
      case 'start_at_4':
        $salida['start_at_4'] = filter_var(
          $value,
          FILTER_VALIDATE_INT
        );
        break;
      case 'ends_at_4':
        $salida['ends_at_4'] = filter_var(
          $value,
          FILTER_VALIDATE_INT
        );
        break;

        // Experiencia
      case 'empresa1':
        $salida['empresa1'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array('options' => array('regexp' => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ]\s*)+$/"))
        );
        break;
      case 'puesto1':
        $salida['puesto1'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array('options' => array('regexp' => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ]\s*)+$/"))
        );
        break;
      case 'tiempo_empresa_1':
        $salida['tiempo_empresa_1'] = filter_var(
          $value,
          FILTER_VALIDATE_INT
        );
        break;
      case 'descripcion_1':
        $salida['descripcion_1'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array("options" => array("regexp" => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ\d]\s*)+$/"))
        );
        break;

      case 'empresa2':
        $salida['empresa2'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array('options' => array('regexp' => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ]\s*)+$/"))
        );
        break;
      case 'puesto2':
        $salida['puesto2'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array('options' => array('regexp' => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ]\s*)+$/"))
        );
        break;
      case 'tiempo_empresa_2':
        $salida['tiempo_empresa_2'] = filter_var(
          $value,
          FILTER_VALIDATE_INT
        );
        break;
      case 'descripcion_2':
        $salida['descripcion_2'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array("options" => array("regexp" => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ\d]\s*)+$/"))
        );
        break;

      case 'empresa3':
        $salida['empresa3'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array('options' => array('regexp' => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ]\s*)+$/"))
        );
        break;
      case 'puesto3':
        $salida['puesto3'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array('options' => array('regexp' => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ]\s*)+$/"))
        );
        break;
      case 'tiempo_empresa_3':
        $salida['tiempo_empresa_3'] = filter_var(
          $value,
          FILTER_VALIDATE_INT
        );
        break;
      case 'descripcion_3':
        $salida['descripcion_3'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array("options" => array("regexp" => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ\d]\s*)+$/"))
        );
        break;

      case 'empresa4':
        $salida['empresa4'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array('options' => array('regexp' => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ]\s*)+$/"))
        );
        break;
      case 'puesto4':
        $salida['puesto4'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array('options' => array('regexp' => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ]\s*)+$/"))
        );
        break;
      case 'tiempo_empresa_4':
        $salida['tiempo_empresa_4'] = filter_var(
          $value,
          FILTER_VALIDATE_INT
        );
        break;
      case 'descripcion_4':
        $salida['descripcion_4'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array("options" => array("regexp" => "/^([a-zA-Z áéíóúñüÁÉÍÓÚÑÜ\d]\s*)+$/"))
        );
        break;

        // Apartado 4B
      case 'radio':
        $salida['radio'] = filter_var(
          $value,
          FILTER_VALIDATE_FLOAT
        );
        break;

        // Apartado 4C
      case 'peso':
        $salida['peso'] = filter_var(
          $value,
          FILTER_VALIDATE_FLOAT
        );
        break;
      case 'altura':
        $salida['altura'] = filter_var(
          $value,
          FILTER_VALIDATE_FLOAT
        );
        break;
      case 'edad':
        $salida['edad'] = filter_var(
          $value,
          FILTER_VALIDATE_INT
        );
        break;
      case 'sexo':
        $salida['sexo'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array("options" => array("regexp" => "/^(hombre)?(mujer)?$/"))
        );
        break;

        // Actividad 9
      case 'experiencia':
        $salida['experiencia'] = filter_var(
          $value,
          FILTER_VALIDATE_REGEXP,
          array("options" => array("regexp" => "/^(principiante)?(intermedio)?(avanzado)?(experto)?$/"))
        );
        break;
      case 'lenguajes':
        $lenguajesValidos = ['python', 'javascript', 'java', 'php', 'C#', 'go', 'kotlin'];
        foreach ($value as $lenguaje) {
          if (!in_array($lenguaje, $lenguajesValidos)) {
            throw new Exception('El lenguaje seleccionado no es válido');
          } else {
            $salida['lenguajes'][] = $lenguaje;
          }
        }
        break;
      case 'aprendizaje':
        $aprendizajesValidos = ['universidad', 'cursos', 'tutoriales', 'amigos'];
        foreach ($value as $aprendizaje) {
          if (!in_array($aprendizaje, $aprendizajesValidos)) {
            throw new Exception('El aprendizaje seleccionado no es válido');
          } else {
            $salida['aprendizaje'][] = $aprendizaje;
          }
        }
        break;
    }
  }
  return $salida;
}
