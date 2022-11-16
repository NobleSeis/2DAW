<?php require('../../templates/header.php'); ?>
<nav class="mb-5" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb bg-light p-3">
    <li class="breadcrumb-item"><a href="/gar_isl_j/inicio.php">Inicio</a></li>
    <li class="breadcrumb-item"><a href="../actividad4.php">Actividad 4</a></li>
    <li class="breadcrumb-item active">Apartado C</li>
  </ol>
</nav>

<div style="display: flex; align-items: center; justify-content: center;">
  <div class="card bg-dark shadow border-0">
    <div class="card-header p-4 bg-warning">
      <h5 class="card-title display-3">Generar informe de salud personal</h5>
      <p class="card-text">Rellene los siguientes campos para conseguir su informe</p>
    </div>
    <div class="card-body px-4">
      <form action="calcular.php" method="post">
        <div class="form-floating my-3">
          <input type="number" step="any" class="form-control" name="peso" placeholder="Peso" required>
          <label for="floatingInput">Peso (kg)</label>
        </div>
        <div class="form-floating my-3">
          <input type="number" step="any" class="form-control" name="altura" placeholder="Altura" required>
          <label for="floatingInput">Altura (cm)</label>
        </div>
        <div class="form-floating my-3">
          <input type="number" step="any" class="form-control" name="edad" placeholder="Edad" required>
          <label for="floatingInput">Edad</label>
        </div>
        <input type="radio" class="btn-check" name="sexo" id="hombre" autocomplete="off" value="hombre" checked>
        <label class="btn btn-outline-primary" for="hombre">Hombre</label>

        <input type="radio" class="btn-check" name="sexo" id="mujer" autocomplete="off" value="mujer">
        <label class="btn btn-outline-primary" for="mujer">Mujer</label>
        <div class="d-grid mt-3">
          <button type="submit" class="btn btn-success">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php require('../../templates/footer.php'); ?>