<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>

<head>
  <meta charset='utf-8' />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Ejercicio 1 - Preguntas</title>

  <!-- Google Fonts Press Start 2P -->
  <link href='https://fonts.googleapis.com/css?family=Press Start 2P' rel='stylesheet'>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Game -->
  <style>
    /* HIDE RADIO */
    [type=radio] {
      position: absolute;
      opacity: 0;
      width: 0;
      height: 0;
    }

    /* IMAGE STYLES */
    [type=radio]+img {
      cursor: pointer;
    }

    /* CHECKED STYLES */
    [type=radio]:checked+img {
      outline: 5px solid #fcba03;
    }
  </style>

</head>

<body class="d-flex flex-column min-vh-100">
  <header class="container-fluid p-5 bg-dark text-white">
    <h1 class="display-3">Primeros pasos con PHP</h1>
    <p class="display-6">Desarrollo Web en Entorno Servidor</p>
  </header>
  <nav class="navbar navbar-expand-sm bg-warning text-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="/gar_isl_j/inicio.php">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/gar_isl_j/1/actividad1.php">Actividad 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/gar_isl_j/2/actividad2.php">Actividad 2</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/gar_isl_j/3/actividad3.php" id="dropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Actividad 3
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdown3">
              <li><a class="dropdown-item" href="/gar_isl_j/3/actividad3.php">Actividad 3</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/gar_isl_j/3/a/apartadoa.php">Apartado A</a></li>
              <li><a class="dropdown-item" href="/gar_isl_j/3/b/apartadob.php">Apartado B</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/gar_isl_j/4/actividad4.php" id="dropdown4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Actividad 4
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdown4">
              <li><a class="dropdown-item" href="/gar_isl_j/4/actividad4.php">Actividad 4</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/gar_isl_j/4/a/apartadoa.php">Apartado A</a></li>
              <li><a class="dropdown-item" href="/gar_isl_j/4/b/apartadob.php">Apartado B</a></li>
              <li><a class="dropdown-item" href="/gar_isl_j/4/c/apartadoc.php">Apartado C</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/gar_isl_j/5/actividad5.php">Actividad 5</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="container my-5">