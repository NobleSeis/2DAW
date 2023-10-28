<?php require('../templates/header.php'); ?>
<h1 class="display-4 text-center bg-dark text-white rounded p-4 mb-4">Actividad 7</h1>

<div style="display: flex; align-items: center; justify-content: center;">
  <div class="card bg-dark shadow border-0" style="width: 30rem;">
    <div class="card-header p-4 bg-warning">
      <h5 class="card-title display-3">Geometría</h5>
      <p class="card-text">Calcular area y perimetro de un circulo</p>
    </div>
    <div class="card-body px-4">
      <form action="calcular.php" method="post">
        <div class="form-floating my-3">
          <input type="number" step="any" class="form-control" name="radio" placeholder="Radio">
          <label for="floatingInput">Ingrese el radio del circulo (en cm)</label>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-success">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>


<?php require('../templates/footer.php'); ?>