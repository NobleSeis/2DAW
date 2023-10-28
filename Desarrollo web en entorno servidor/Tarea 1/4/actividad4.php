<?php require('../templates/header.php'); ?>
<h1 class="display-4 text-center bg-dark text-white rounded p-4 mb-4">Actividad 4</h1>

<div class="row d-flex align-items-center">
  <div class="col-12">
    <div style="display: flex; min-height: 50vh; align-items: center; justify-content: center;">
      <div class="card bg-dark shadow border-0" style="width: 30rem;">
        <div class="card-header p-4 bg-warning">
          <h5 class="card-title display-3">Formulario</h5>
          <p class="card-text">Rellene los campos y pulse enviar</p>
        </div>
        <div class="card-body px-4">
          <form action="perfil.php" method="post">
            <div class="my-4">
              <input type="text" class="form-control" name="nombre" placeholder="Nombre y apellidos" aria-describedby="emailHelp" required>
            </div>

            <div class="my-4">
              <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>

            <div class="my-4">
              <input type="tel" class="form-control" name="telefono" placeholder="Teléfono (opcional)">
            </div>

            <div class="my-4">
              <input type="url" class="form-control" name="url" placeholder="Sitio web personal (opcional)">
            </div>

            <div class="my-4">
              <textarea class="form-control" name="consulta" rows="5" placeholder="Escriba su consulta aquí" required></textarea>
            </div>
            <div class="d-grid">
              <button type="submit" class="btn btn-success">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require('../templates/footer.php'); ?>