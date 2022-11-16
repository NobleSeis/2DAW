<?php
// Funcion de validacion
require('../../helpers/validate.php');

$datosValidos = validate($_POST);
?>
<?php require('../../templates/header.php'); ?>

<nav class="mb-5" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb bg-light p-3">
    <li class="breadcrumb-item"><a href="/gar_isl_j/inicio.php">Inicio</a></li>
    <li class="breadcrumb-item"><a href="../actividad3.php">Actividad 4</a></li>
    <li class="breadcrumb-item active"><a href="apartadoa.php">Apartado B</a></li>
    <li class="breadcrumb-item active">Resultados</li>
  </ol>
</nav>

<div style="display: flex; align-items: center; justify-content: center;">
  <div class="card bg-dark shadow border-0" style="width: 30rem;">
    <div class="card-header p-4 bg-warning">
      <h5 class="card-title display-3 text-center">Area y Perímetro</h5>
      <p class="card-text text-center">⬇️⬇️⬇️⬇️ Resultados ⬇️⬇️⬇️⬇️</p>
    </div>
    <div class="card-body px-4">
      <?php if ($datosValidos) : ?>
        <div class="my-4">
          <p class="text-white">
            <span class="bg-primary rounded p-2">Perimetro:</span>
            <?= $datosValidos['lado'] * 4 ?> cm
          </p>
        </div>
        <div class="my-4">
          <p class="text-white">
            <span class="bg-primary rounded p-2">Area:</span>
            <?= $datosValidos['lado'] ** 2 ?> cm<sup>2</sup>
          </p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php require('../../templates/footer.php'); ?>