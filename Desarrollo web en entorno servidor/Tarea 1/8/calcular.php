<?php
// Funcion de validacion
require('../helpers/validate.php');

$datosValidos = validate($_POST);

$peso = $datosValidos['peso'];
$altura = $datosValidos['altura'];
$edad = $datosValidos['edad'];
$sexo = $datosValidos['sexo'];

$imc = round($peso / ($altura / 100) ** 2, 2);

$tmb = (10 * $peso) + (6.25 * $altura) - (5 * $edad);
if ($sexo == "hombre") {
  $tmb += 5;
} else {
  $tmb -= 161;
}
?>
<?php require('../templates/header.php'); ?>

<h1 class="display-4 text-center bg-dark text-white rounded p-4 mb-4">Actividad 8</h1>


<div class="card bg-dark shadow border-0 mb-5">
  <div class="card-header p-4 bg-warning">
    <h5 class="card-title display-3 text-center">Informe de salud</h5>
  </div>
  <div class="card-body px-4">
    <?php if ($datosValidos) : ?>
      <div class="my-4">
        <p class="text-white">
          <span class="bg-primary rounded p-2">Índice de masa corporal:</span>
          <?= $imc ?>
        </p>
      </div>
      <div class="my-4">
        <p class="text-white">
          <span class="bg-primary rounded p-2">Tasa de metabolismo basal:</span>
          <?= $tmb ?> kcal por día
        </p>
      </div>
    <?php endif; ?>
  </div>
</div>

</div>
<?php require('../templates/footer.php'); ?>