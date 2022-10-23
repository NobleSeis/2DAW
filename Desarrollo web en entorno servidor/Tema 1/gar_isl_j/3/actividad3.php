<?php require('../templates/header.php'); ?>

<nav class="mb-5" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb bg-light p-3">
        <li class="breadcrumb-item"><a href="../inicio.php">Inicio</a></li>
        <li class="breadcrumb-item active">Actividad 3</li>
    </ol>
</nav>


<h3 class="text-center">La actividad 3 se divide en dos apartados</h3>
<div style="display: flex; min-height: 50vh; align-items: center; justify-content: center;">
    <div class="card-group">
        <div class="card bg-dark text-white p-4 m-3 text-center rounded col-md-12">
            <h3 class="card-header text-dark bg-warning rounded">Apartado A</h3>
            <div class="card-body">
                <p class="card-text">
                    Recolección y validación de un formulario.
                </p>
                <p class="display-1">✔️</p>
            </div>
            <div class="card-footer bg-dark d-grid">
                <a href="a/apartadoa.php" class="btn btn-success">Ver apartado</a>
            </div>
        </div>
        <div class="card bg-dark text-white p-4 m-3 text-center rounded col-md-12">
            <h3 class="card-header text-dark bg-warning rounded">Apartado B</h3>
            <div class="card-body">
                <p class="card-text">
                    Generador de curriculum a partir de formulario.
                </p>
                <p class="display-1">📄</p>
            </div>
            <div class="card-footer bg-dark d-grid">
                <a href="b/apartadob.php" class="btn btn-success">Ver apartado</a>
            </div>
        </div>
    </div>
</div>
<?php require('../templates/footer.php'); ?>