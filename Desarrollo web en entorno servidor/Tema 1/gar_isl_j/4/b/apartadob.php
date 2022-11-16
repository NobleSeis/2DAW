<?php require('../../templates/header.php'); ?>
<nav class="mb-5" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb bg-light p-3">
    <li class="breadcrumb-item"><a href="/gar_isl_j/inicio.php">Inicio</a></li>
    <li class="breadcrumb-item"><a href="../actividad4.php">Actividad 4</a></li>
    <li class="breadcrumb-item active">Apartado B</li>
  </ol>
</nav>


<div style="display: flex; align-items: center; justify-content: center;">
  <div class="card bg-dark shadow border-0" style="width: 30rem;">
    <div class="card-header p-4 bg-warning">
      <h5 class="card-title display-3">Geometría</h5>
      <p class="card-text">Calcular area y perimetro de un cuadrado</p>
    </div>
    <div class="card-body px-4">
      <form action="calcular.php" method="post">
        <div class="form-floating my-3">
          <input type="number" step="any" class="form-control" name="lado" placeholder="Lado">
          <label for="floatingInput">Ingrese el lado del cuadrado (en cm)</label>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-success">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>


<?php require('../../templates/footer.php'); ?>