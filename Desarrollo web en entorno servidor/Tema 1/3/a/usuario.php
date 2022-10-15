<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
  <head>
    <meta charset='utf-8' />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>En construcción</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body class="d-flex flex-column min-vh-100">
	<header class="container-fluid p-5 bg-dark text-white">
        <h1 class="display-3">Primeros pasos con PHP</h1>
        <p class="display-6">Desarrollo Web en Entorno Servidor</p>
    </header>
    <nav class="navbar navbar-expand-sm bg-warning text-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../inicio.html">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../../1/actividad1.html">Actividad 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../2/actividad2.html">Actividad 2</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle active text-decoration-underline" href="../actividad3.html" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Actividad 3
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                      <li><a class="dropdown-item" href="../actividad3.html">Actividad 3</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item active" href="../3/a/apartadoa.html">Apartado A</a></li>
                      <li><a class="dropdown-item" href="../3/b/apartadob.html">Apartado B</a></li>
                  </ul>
              </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../4/actividad4.html">Actividad 4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../5/actividad5.html">Actividad 5</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <section class="container p-5">

        <div style="display: flex; min-height: 50vh; align-items: center; justify-content: center;">
            <div class="card bg-dark shadow border-0" style="width: 30rem;">
                <div class="card-header p-4 bg-warning">
                  <h5 class="card-title display-3 text-center">Formulario</h5>
                  <p class="card-text text-center">⬇️⬇️⬇️⬇️ Datos recibidos ⬇️⬇️⬇️⬇️</p>
                </div>
                <div class="card-body px-4">
                    <?php if ( $_POST ) : ?>
                        <?php foreach ( $_POST as $key => $value ) : ?>
                            <div class="my-4">
                                    <p class="text-white"><?= $key ?>: <?= $value ?></p>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
              </div>
        </div>
    </section>
    <footer class="container-fluid text-center text-white bg-dark p-5 mt-auto">
        <p>José Manuel García Isla</p>
        <p>GitHub: <a class="text-warning" href="https://github.com/NobleSeis/2DAW" target="_blank" rel="noopener noreferrer">@NobleSeis</a></p>
    </footer>
  </body>
</html>