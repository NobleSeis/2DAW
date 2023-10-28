<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset='utf-8' />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Ejercicio 1 - Preguntas</title>

  <!-- Google Fonts Press Start 2P -->
  <link href='https://fonts.googleapis.com/css?family=Press Start 2P' rel='stylesheet'>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <title>Primeros pasos en PHP</title>
  <style>
    .jumbo {
      background-image: url(/assets/background.jpg);
      background-size: cover;
      height: 40vh;
    }

    .mask {
      background-color: rgba(0, 0, 0, 0.6);
    }
  </style>
</head>

<body>
  <!-- Header -->
  <div class="jumbo text-center bg-image">
    <div class="mask  h-100">
      <div class="d-flex justify-content-center align-items-center">
        <div class="text-white p-5">
          <h1 class="display-1 mb-3"><strong>Primeros pasos con PHP</strong></h1>
          <h4 class="display-5 mb-3">Actividad de la unidad 1</h4>
        </div>
      </div>
    </div>
  </div>

  <!-- Content -->
  <section class="container my-5">
    <div class="row row-cols-1 row-cols-md-4 g-4">
      <div class="col">
        <div class="card h-100">
          <h4 class="card-header">Actividad 1</h4>
          <div class="card-body">
            <p class="card-text">Investiga y comprende los siguientes conceptos:
            <ul>
              <li>Modelo cliente-servidor</li>
              <li>Servidor WEB</li>
              <li>Apache</li>
              <li>Protocolo HTTP</li>
              <li>Métodos GET y POST de HTTP</li>
              <li>Desarrollo WEB</li>
              <li>Lenguaje de programación PHP</li>
              <li>Stack de soluciones</li>
              <li>XAMPP</li>
            </ul>
            Posteriormente, redacta una breve explicación con tus propias palabras de cada uno.
            </p>
          </div>
          <div class="card-footer text-center">
            <a href="1/actividad1.php" class="btn btn-primary">Ir a la actividad</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <h4 class="card-header">Actividad 2</h4>
          <div class="card-body">
            <p class="card-text">
              Desarrolla un tutorial que guíe sobre cómo instalar XAMPP en los sistemas operativos Windows 10 u 11 y GNU/Linux. Este tutorial debe incluir capturas de pantalla para cada sistema operativo. Adicionalmente, debe incluir una sección donde se enseñe a embeber código PHP en HTML, iniciar el servidor Apache local con XAMPP y cómo acceder a él desde el navegador.
            </p>
          </div>
          <div class="card-footer text-center">
            <a href="2/actividad2.php" class="btn btn-primary">Ir a la actividad</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <h4 class="card-header">Actividad 3</h4>
          <div class="card-body">
            <p class="card-text">
              Diseña un sitio web con varias páginas PHP que estén en diferentes carpetas y navega entre ellas usando rutas relativas.
            </p>
          </div>
          <div class="card-footer text-center">
            <a href="3/actividad3.php" class="btn btn-primary">Ir a la actividad</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <h4 class="card-header">Actividad 4</h4>
          <div class="card-body">
            <p class="card-text">
              Diseña este
              <a href="https://milq.github.io/cursos/dwes/ud/1/formulario.png" target="_blank">formulario</a>.
              Tras pulsar el botón Enviar, los datos ingresados por el usuario serán recopilados y mostrados en una nueva página denominada perfil.php.
            </p>
          </div>
          <div class="card-footer text-center">
            <a href="4/actividad4.php" class="btn btn-primary">Ir a la actividad</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <h4 class="card-header">Actividad 5</h4>
          <div class="card-body">
            <p class="card-text">
              Implementa un formulario donde los usuarios puedan ingresar datos para crear un Curriculum Vitae. Este formulario debe solicitar:
            <ul>
              <li>Información personal</li>
              <li>Experiencia laboral</li>
              <li>Formación académica</li>
              <li>Dominio de idiomas</li>
              <li>Cualquier otro dato relevanta</li>
            </ul>
            Asegúrate de incluir checkboxes en el formulario. Tras enviar el formulario, los datos deben ser recopilados y mostrados en el archivo <strong>cv.php</strong>.
            </p>
          </div>
          <div class="card-footer text-center">
            <a href="5/actividad5.php" class="btn btn-primary">Ir a la actividad</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <h4 class="card-header">Actividad 6</h4>
          <div class="card-body">
            <p class="card-text">
              Crea una versión digital del juego Piedra, papel, tijeras, lagarto o Spock. Los usuarios deberán seleccionar una opción y luego recibirán una elección aleatoria de la computadora. El resultado se determinará según estas <a href="https://milq.github.io/cursos/dwes/ud/1/piedra_papel_tijeras_lagarto_spock.png">reglas</a> y se le mostrará al usuario si ha ganado, perdido o empatado.
            </p>
          </div>
          <div class="card-footer text-center">
            <a href="6/actividad6.php" class="btn btn-primary">Ir a la actividad</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <h4 class="card-header">Actividad 7</h4>
          <div class="card-body">
            <p class="card-text">
              Crea este <a href="https://milq.github.io/cursos/dwes/ud/1/circunferencia.png" target="_blank">formulario</a> donde el usuario debe ingresar el radio de una circunferencia y, tras pulsar en Calcular, en una nueva página, se validarán los datos y se calculará el área y la longitud de dicha circunferencia.
            </p>
          </div>
          <div class="card-footer text-center">
            <a href="7/actividad7.php" class="btn btn-primary">Ir a la actividad</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <h4 class="card-header">Actividad 8</h4>
          <div class="card-body">
            <p class="card-text">
              Implementa una calculadora básica de salud. Los usuarios deberán introducir datos como sexo, edad, altura y peso. Al enviar el formulario, los datos se validarán y se generará un informe que incluya el Índice de Masa Corporal (<a href="https://es.wikipedia.org/wiki/%C3%8Dndice_de_masa_corporal" target="_blank">IMC</a>) y el metabolismo basal usando <a href="https://es.wikipedia.org/wiki/Ecuaci%C3%B3n_de_Harris-Benedict#Ecuaciones_revisadas_en_1990" target="_blank">estas</a> ecuaciones de Harris-Benedict revisadas en 1990.
            </p>
          </div>
          <div class="card-footer text-center">
            <a href="8/actividad8.php" class="btn btn-primary">Ir a la actividad</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <h4 class="card-header">Actividad 9</h4>
          <div class="card-body">
            <p class="card-text">
              Crea una encuesta sobre conocimientos y habilidades usando varias páginas web interconectadas. Los datos de un formulario deben ser enviados a otro a través de campos <a href="https://www.w3schools.com/tags/att_input_type_hidden.asp" target="_blank">ocultos</a>. Debe aparecer en esta encuesta selecciones múltiples y checkboxes. Todos los datos recopilados deben validarse y almacenarse en un archivo CSV.
            </p>
          </div>
          <div class="card-footer text-center">
            <a href="9/actividad9.php" class="btn btn-primary">Ir a la actividad</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <h4 class="card-header">Actividad 10</h4>
          <div class="card-body">
            <p class="card-text">
              A partir del archivo CSV generado en la actividad anterior, crea funciones en PHP para procesar los datos obtenidos. Estas funciones deben permitir extraer información relevante, como "Porcentaje de personas que les gusta leer", y en algunos casos, las funciones deben retornar arrays asociativos con la información solicitada en una nueva página.
            </p>
          </div>
          <div class="card-footer text-center">
            <a href="10/actividad10.php" class="btn btn-primary">Ir a la actividad</a>
          </div>
        </div>
      </div>

    </div>

    <?php require('templates/footer.php'); ?>