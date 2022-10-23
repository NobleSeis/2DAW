<?php require('../../templates/header.php'); ?>
<nav class="mb-5" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb bg-light p-3">
    <li class="breadcrumb-item"><a href="/gar_isl_j/inicio.php">Inicio</a></li>
    <li class="breadcrumb-item"><a href="../actividad4.php">Actividad 4</a></li>
    <li class="breadcrumb-item active">Apartado A</li>
  </ol>
</nav>

<div style="font-family: 'Press Start 2P';" class="text-center row">
  <h1 class="col-12 display-5">Piedra Papel Tijeras Lagarto Spock</h1>
  <h3 class="mt-5" style="text-decoration: underline;">Reglas</h3>
  <p class="text-center">
  <ul style="list-style: none;">
    <li>Tijeras cortan Papel</li>
    <li>Papel tapa Piedra</li>
    <li>Piedra aplasta Lagarto</li>
    <li>Lagarto envenena Spock</li>
    <li>Spock rompe Tijeras</li>
    <li>Tijeras decapitan Lagarto</li>
    <li>Lagarto devora Papel</li>
    <li>Papel desautoriza Spock</li>
    <li>Spock vaporiza Piedra</li>
    <li>Piedra aplasta Tijeras</li>
  </ul>
  </p>
  <div class="p-5">
    <h3 class="mb-5" style="text-decoration: underline;">Haz tu elección</h3>
    <form class="g-3" action="resultado.php" method="get">
      <div class="row justify-content-center bg-dark p-4 rounded">
        <div class="col-4 col-md-1">
          <label>
            <input type="radio" class="form-control" name="choice" value="piedra" checked>
            <img src=" assets/piedra.webp" alt="Piedra" class="rounded-circle col-12">
          </label>
        </div>
        <div class="col-4 col-md-1">
          <label>
            <input type="radio" class="form-control" name="choice" value="papel">
            <img src=" assets/papel.webp" alt="Papel" class="rounded-circle col-12">
          </label>
        </div>
        <div class="col-4 col-md-1">
          <label>
            <input type="radio" class="form-control" name="choice" value="tijeras">
            <img src="assets/tijeras.png" alt="Tijeras" class="rounded-circle col-12">
          </label>
        </div>


        <div class="col-4 col-md-1">
          <label>
            <input type="radio" class="form-control" name="choice" value="lagarto">
            <img src="assets/lagarto.png" alt="Lagarto" class="rounded-circle col-12">
          </label>
        </div>
        <div class="col-4 col-md-1">
          <label>
            <input type="radio" class="form-control" name="choice" value="spock">
            <img src="assets/spock.jpg" alt="Spock" class="rounded-circle col-12">
          </label>
        </div>
      </div>
      <div class="col-12 mt-5">
        <div class="d-grid gap-2 col-6 mx-auto">
          <button class=" btn btn-success" type="submit">¡Jugar!</button>
        </div>
      </div>
    </form>
  </div>
</div>
<?php require('../../templates/footer.php'); ?>