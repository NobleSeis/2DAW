<?php
// Funcion de validacion
require('../helpers/validate.php');

$datosValidos = validate($_POST);
?>
<?php require('../templates/header.php'); ?>
<h1 class="display-4 text-center bg-dark text-white rounded p-4 mb-4">Actividad 5</h1>

<div class="shadow" style="min-height: 50vh; min-width: 100%">
  <div class="row" style="padding: 0px; margin:0px">
    <div class="bg-dark p-5 col-md-4 text-white h5">
      <?php if ($datosValidos['url']) : ?>
        <img class="rounded-circle" style="max-width: 100%;" src="<?= ($datosValidos['url']) ?>" alt="Avatar">
      <?php endif; ?>
      <p class="text-center h2 mt-5"><?= $datosValidos['nombre'] ?></p>
      <hr class="my-4">
      <h3 class="mb-4 text-decoration-underline">Contacto</h3>
      <?php if ($datosValidos['telefono']) : ?>
        <p><i class="mx-2 bi bi-telephone-fill"></i> <?= $datosValidos['telefono'] ?></p>
      <?php endif; ?>
      <p><i class="mx-2 bi bi-envelope"></i> <?= $datosValidos['email'] ?></p>
      <p><i class="mx-2 bi bi-house"></i> <?= $datosValidos['calle'] ?>, <?= $datosValidos['numero'] ?>, <?= $datosValidos['poblacion'] ?> (<?= $datosValidos['provincia'] ?>)</p>
      <?php if ($datosValidos['github']) : ?>
        <p><i class="mx-2 bi bi-github"></i><?= $datosValidos['github'] ?></p>
      <?php endif; ?>
      <hr class="my-4">
      <?php if ($datosValidos['habilidad1'] || $datosValidos['habilidad2'] || $datosValidos['habilidad3'] || $datosValidos['habilidad4']) : ?>
        <h3 class="mb-4 text-decoration-underline">Habilidades</h3>
      <?php endif; ?>
      <?php if ($datosValidos['habilidad1']) : ?>
        <div class="mb-3">
          <p><?= $datosValidos['habilidad1'] ?></p>
          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: <?= $datosValidos['habilidad1Range'] ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      <?php endif; ?>
      <?php if ($datosValidos['habilidad2']) : ?>
        <div class="mb-3">
          <p><?= $datosValidos['habilidad2'] ?></p>
          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: <?= $datosValidos['habilidad2Range'] ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      <?php endif; ?>
      <?php if ($datosValidos['habilidad3']) : ?>
        <div class="mb-3">
          <p><?= $datosValidos['habilidad3'] ?></p>
          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: <?= $datosValidos['habilidad3Range'] ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      <?php endif; ?>
      <?php if ($datosValidos['habilidad4']) : ?>
        <div class="mb-3">
          <p><?= $datosValidos['habilidad4'] ?></p>
          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: <?= $datosValidos['habilidad4Range'] ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      <?php endif; ?>
    </div>
    <div class="col-md-8">
      <div class="row p-5">
        <h2 class="text-center my-4">Estudios</h2>
        <?php if ($datosValidos['centro1'] || $datosValidos['estudios1']) : ?>
          <div class="bg-dark text-white my-3 p-4 rounded shadow">
            <h4><?= $datosValidos['estudios1'] ?></h4>
            <h5><?= $datosValidos['centro1'] ?> <span class="badge bg-warning text-black"><?= $datosValidos['start_at_1'] || $datosValidos['ends_at_1'] ? $datosValidos['start_at_1'] . '/' . $datosValidos['ends_at_1'] : '' ?></span></h5>
          </div>
        <?php endif; ?>
        <?php if ($datosValidos['centro2'] || $datosValidos['estudios2']) : ?>
          <div class="bg-dark text-white my-3 p-4 rounded shadow">
            <h4><?= $datosValidos['estudios2'] ?></h4>
            <h5><?= $datosValidos['centro2'] ?> <span class="badge bg-warning text-black"><?= $datosValidos['start_at_2'] || $datosValidos['ends_at_2'] ? $datosValidos['start_at_2'] . '/' . $datosValidos['ends_at_2'] : '' ?></span></h5>
          </div>
        <?php endif; ?>
        <?php if ($datosValidos['centro3'] || $datosValidos['estudios3']) : ?>
          <div class="bg-dark text-white my-3 p-4 rounded shadow">
            <h4><?= $datosValidos['estudios3'] ?></h4>
            <h5><?= $datosValidos['centro3'] ?> <span class="badge bg-warning text-black"><?= $datosValidos['start_at_3'] || $datosValidos['ends_at_3'] ? $datosValidos['start_at_3'] . '/' . $datosValidos['ends_at_3'] : '' ?></span></h5>
          </div>
        <?php endif; ?>
        <?php if ($datosValidos['centro4'] || $datosValidos['estudios4']) : ?>
          <div class="bg-dark text-white my-3 p-4 rounded shadow">
            <h4><?= $datosValidos['estudios4'] ?></h4>
            <h5><?= $datosValidos['centro4'] ?> <span class="badge bg-warning text-black"><?= $datosValidos['start_at_4'] || $datosValidos['ends_at_4'] ? $datosValidos['start_at_4'] . '/' . $datosValidos['ends_at_4'] : '' ?></span></h5>
          </div>
        <?php endif; ?>
        <h2 class="text-center my-4">Experiencia Laboral</h2>
        <?php if ($datosValidos['empresa1']) : ?>
          <div class="bg-dark text-white my-3 p-4 rounded shadow">
            <h4><?= $datosValidos['empresa1'] ?></h4>
            <h5><?= $datosValidos['puesto1'] ?> <span class="badge bg-warning text-black"><?= $datosValidos['tiempo_empresa_1'] ?></span></h5>
            <p><?= $datosValidos['descripcion_1'] ?></p>
          </div>
        <?php endif; ?>
        <?php if ($datosValidos['empresa2']) : ?>
          <div class="bg-dark text-white my-3 p-4 rounded shadow">
            <h4><?= $datosValidos['empresa2'] ?></h4>
            <h5><?= $datosValidos['puesto2'] ?> <span class="badge bg-warning text-black"><?= $datosValidos['tiempo_empresa_2'] ?></span></h5>
            <p><?= $datosValidos['descripcion_2'] ?></p>
          </div>
        <?php endif; ?>
        <?php if ($datosValidos['empresa3']) : ?>
          <div class="bg-dark text-white my-3 p-4 rounded shadow">
            <h4><?= $datosValidos['empresa3'] ?></h4>
            <h5><?= $datosValidos['puesto3'] ?> <span class="badge bg-warning text-black"><?= $datosValidos['tiempo_empresa_3'] ?></span></h5>
            <p><?= $datosValidos['descripcion_3'] ?></p>
          </div>
        <?php endif; ?>
        <?php if ($datosValidos['empresa4']) : ?>
          <div class="bg-dark text-white my-3 p-4 rounded shadow">
            <h4><?= $datosValidos['empresa4'] ?></h4>
            <h5><?= $datosValidos['puesto4'] ?> <span class="badge bg-warning text-black"><?= $datosValidos['tiempo_empresa_4'] ?></span></h5>
            <p><?= $datosValidos['descripcion_4'] ?></p>
          </div>
        <?php endif; ?>
      </div>

    </div>
  </div>


</div>
<?php require('../templates/footer.php'); ?>