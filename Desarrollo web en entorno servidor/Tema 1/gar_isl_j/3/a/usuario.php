<?php
// Funcion de validacion
require('../../helpers/validate.php');

$datosValidos = validate($_POST);
?>
<?php require('../../templates/header.php'); ?>

<nav class="mb-5" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb bg-light p-3">
        <li class="breadcrumb-item"><a href="/gar_isl_j/inicio.php">Inicio</a></li>
        <li class="breadcrumb-item"><a href="../actividad3.php">Actividad 3</a></li>
        <li class="breadcrumb-item active"><a href="apartadoa.php">Apartado A</a></li>
        <li class="breadcrumb-item active">Resultados</li>
    </ol>
</nav>

<div style="display: flex; min-height: 50vh; align-items: center; justify-content: center;">
    <div class="card bg-dark shadow border-0" style="width: 30rem;">
        <div class="card-header p-4 bg-warning">
            <h5 class="card-title display-3 text-center">Formulario</h5>
            <p class="card-text text-center">⬇️⬇️⬇️⬇️ Datos recibidos ⬇️⬇️⬇️⬇️</p>
        </div>
        <div class="card-body px-4">
            <?php if ($datosValidos) : ?>
                <?php foreach ($datosValidos as $key => $value) : ?>
                    <div class="my-4">
                        <p class="text-white">
                            <span class="bg-primary rounded p-2">
                                <?= ucfirst($key) ?>
                            </span>
                            <span class="<?= $value ? 'bg-success' : 'bg-danger' ?> rounded p-2 mx-1">
                                <?= $value ? $value : 'Campo no válido' ?>
                            </span>
                        </p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php require('../../templates/footer.php'); ?>