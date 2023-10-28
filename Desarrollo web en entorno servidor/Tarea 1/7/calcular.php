<?php
// Funcion de validacion
require('../helpers/validate.php');

$datosValidos = validate($_POST);
?>
<?php require('../templates/header.php'); ?>

<h1 class="display-4 text-center bg-dark text-white rounded p-4 mb-4">Actividad 7</h1>

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
            <?= number_format($datosValidos['radio'] * 2 * M_PI, 2, ',', ' ') ?> cm
          </p>
        </div>
        <div class="my-4">
          <p class="text-white">
            <span class="bg-primary rounded p-2">Area:</span>
            <?= number_format($datosValidos['radio'] ** 2 * M_PI, 2, ',', ' ') ?> cm<sup>2</sup>
          </p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php require('../templates/footer.php'); ?>