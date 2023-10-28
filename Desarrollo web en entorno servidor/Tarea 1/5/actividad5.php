<?php require('../templates/header.php'); ?>
<h1 class="display-4 text-center bg-dark text-white rounded p-4 mb-4">Actividad 5</h1>

<div class="row d-flex align-items-center">
  <div class="col-12">
    <div style="display: flex; min-height: 50vh; align-items: center; justify-content: center;">
      <div class="card bg-dark shadow border-0">
        <div class="card-header p-4 bg-warning">
          <h5 class="card-title display-3">Formulario de generación de curriculum</h5>
          <p class="card-text">Rellene los campos y pulse enviar</p>
        </div>
        <div class="card-body px-4">
          <form action="cv.php" method="post">
            <div class="display-6 text-white pb-4 text-decoration-underline"> Datos personales </div>
            <div class="row">
              <div class="mb-4 col-md-6">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre y apellidos" required>
              </div>
              <div class="mb-4 col-md-6">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
              </div>
              <div class="mb-4 col-md-9">
                <input type="url" class="form-control" name="url" placeholder="URL de imagen de perfil (opcional)">
              </div>
              <div class="mb-4 col-md-3">
                <input type="tel" class="form-control" name="telefono" placeholder="Teléfono">
              </div>
              <div class="input-group mb-4">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" name="github" placeholder="Github" aria-describedby="basic-addon1">
              </div>
            </div>

            <div class="display-6 text-white pb-4 text-decoration-underline"> Dirección </div>
            <div class="row">
              <div class="mb-4 col-md-4">
                <input type="text" class="form-control" name="calle" placeholder="Calle" required>
              </div>
              <div class="mb-4 col-md-2">
                <input type="number" class="form-control" name="numero" placeholder="Número" required>
              </div>
              <div class="mb-4 col-md-3">
                <input type="text" class="form-control" name="poblacion" placeholder="Población" required>
              </div>
              <div class="mb-4 col-md-3">
                <input type="text" class="form-control" name="provincia" placeholder="Provincia" required>
              </div>
            </div>

            <div class="display-6 text-white pb-4 text-decoration-underline"> Habilidades </div>
            <div class="row">
              <div class="mb-4 col-md-3">
                <input type="text" class="form-control" name="habilidad1" placeholder="Habilidad #1">
                <label for="habilidad1" class="form-label text-white pt-2">Nivel de dominio de la habilidad #1</label>
                <input type="range" class="form-range" min="0" max="100" step="25" name="habilidad1Range">
              </div>
              <div class="mb-4 col-md-3">
                <input type="text" class="form-control" name="habilidad2" placeholder="Habilidad #2">
                <label for="habilidad2" class="form-label text-white pt-2">Nivel de dominio de la habilidad #2</label>
                <input type="range" class="form-range" min="0" max="100" step="25" name="habilidad2Range">
              </div>
              <div class="mb-4 col-md-3">
                <input type="text" class="form-control" name="habilidad3" placeholder="Habilidad #3">
                <label for="habilidad3" class="form-label text-white pt-2">Nivel de dominio de la habilidad #3</label>
                <input type="range" class="form-range" min="0" max="100" step="25" name="habilidad3Range">
              </div>
              <div class="mb-4 col-md-3">
                <input type="text" class="form-control" name="habilidad4" placeholder="Habilidad #4">
                <label for="habilidad4" class="form-label text-white pt-2">Nivel de dominio de la habilidad #4</label>
                <input type="range" class="form-range" min="0" max="100" step="25" name="habilidad4Range">
              </div>
            </div>

            <div class="display-6 text-white pb-4 text-decoration-underline"> Estudios </div>
            <div class="row">
              <h4 class="text-white">Estudios #1</h4>
              <div class="mb-4 col-md-4">
                <input type="text" class="form-control" name="centro1" placeholder="Centro de estudio #1">
              </div>
              <div class="mb-4 col-md-4">
                <input type="text" class="form-control" name="estudios1" placeholder="Titulación">
              </div>
              <div class="mb-4 col-md-2">
                <input type="number" class="form-control" name="start_at_1" placeholder="Año de inicio">
              </div>
              <div class="mb-4 col-md-2">
                <input type="number" class="form-control" name="ends_at_1" placeholder="Año de fin">
              </div>
            </div>
            <div class="row">
              <h4 class="text-white">Estudios #2</h4>
              <div class="mb-4 col-md-4">
                <input type="text" class="form-control" name="centro2" placeholder="Centro de estudio #1">
              </div>
              <div class="mb-4 col-md-4">
                <input type="text" class="form-control" name="estudios2" placeholder="Titulación">
              </div>
              <div class="mb-4 col-md-2">
                <input type="number" class="form-control" name="start_at_2" placeholder="Año de inicio">
              </div>
              <div class="mb-4 col-md-2">
                <input type="number" class="form-control" name="ends_at_2" placeholder="Año de fin">
              </div>
            </div>
            <div class="row">
              <h4 class="text-white">Estudios #3</h4>
              <div class="mb-4 col-md-4">
                <input type="text" class="form-control" name="centro3" placeholder="Centro de estudio #1">
              </div>
              <div class="mb-4 col-md-4">
                <input type="text" class="form-control" name="estudios3" placeholder="Titulación">
              </div>
              <div class="mb-4 col-md-2">
                <input type="number" class="form-control" name="start_at_3" placeholder="Año de inicio">
              </div>
              <div class="mb-4 col-md-2">
                <input type="number" class="form-control" name="ends_at_3" placeholder="Año de fin">
              </div>
            </div>
            <div class="row">
              <h4 class="text-white">Estudios #4</h4>
              <div class="mb-4 col-md-4">
                <input type="text" class="form-control" name="centro4" placeholder="Centro de estudio #1">
              </div>
              <div class="mb-4 col-md-4">
                <input type="text" class="form-control" name="estudios4" placeholder="Titulación">
              </div>
              <div class="mb-4 col-md-2">
                <input type="number" class="form-control" name="start_at_4" placeholder="Año de inicio">
              </div>
              <div class="mb-4 col-md-2">
                <input type="number" class="form-control" name="ends_at_4" placeholder="Año de fin">
              </div>
            </div>

            <div class="display-6 text-white pb-4 text-decoration-underline"> Experiencia laboral </div>
            <div class="row">
              <h4 class="text-white">Experiencia #1</h4>
              <div class="mb-4 col-md-6">
                <input type="text" class="form-control" name="empresa1" placeholder="Empresa #1">
              </div>
              <div class="mb-4 col-md-4">
                <input type="text" class="form-control" name="puesto1" placeholder="Puesto que ocupaba">
              </div>
              <div class="mb-4 col-md-2">
                <input type="number" class="form-control" name="tiempo_empresa_1" placeholder="Años de trabajo">
              </div>
              <div class="mb-4">
                <textarea type="text" class="form-control" name="descripcion_1" placeholder="Breve descripción de sus responsabilidades"></textarea>
              </div>
            </div>
            <div class="row">
              <h4 class="text-white">Experiencia #2</h4>
              <div class="mb-4 col-md-6">
                <input type="text" class="form-control" name="empresa2" placeholder="Empresa #1">
              </div>
              <div class="mb-4 col-md-4">
                <input type="text" class="form-control" name="puesto2" placeholder="Puesto que ocupaba">
              </div>
              <div class="mb-4 col-md-2">
                <input type="number" class="form-control" name="tiempo_empresa_2" placeholder="Años de trabajo">
              </div>
              <div class="mb-4">
                <textarea type="text" class="form-control" name="descripcion_2" placeholder="Breve descripción de sus responsabilidades"></textarea>
              </div>
            </div>
            <div class="row">
              <h4 class="text-white">Experiencia #3</h4>
              <div class="mb-4 col-md-6">
                <input type="text" class="form-control" name="empresa3" placeholder="Empresa #1">
              </div>
              <div class="mb-4 col-md-4">
                <input type="text" class="form-control" name="puesto3" placeholder="Puesto que ocupaba">
              </div>
              <div class="mb-4 col-md-2">
                <input type="number" class="form-control" name="tiempo_empresa_3" placeholder="Años de trabajo">
              </div>
              <div class="mb-4">
                <textarea type="text" class="form-control" name="descripcion_3" placeholder="Breve descripción de sus responsabilidades"></textarea>
              </div>
            </div>
            <div class="row">
              <h4 class="text-white">Experiencia #4</h4>
              <div class="mb-4 col-md-6">
                <input type="text" class="form-control" name="empresa4" placeholder="Empresa #1">
              </div>
              <div class="mb-4 col-md-4">
                <input type="text" class="form-control" name="puesto4" placeholder="Puesto que ocupaba">
              </div>
              <div class="mb-4 col-md-2">
                <input type="number" class="form-control" name="tiempo_empresa_4" placeholder="Años de trabajo">
              </div>
              <div class="mb-4">
                <textarea type="text" class="form-control" name="descripcion_4" placeholder="Breve descripción de sus responsabilidades"></textarea>
              </div>
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