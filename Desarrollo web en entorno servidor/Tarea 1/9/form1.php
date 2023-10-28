<?php require "../templates/header.php"; ?>
<h1 class="display-4 text-center bg-dark text-white rounded p-4 mb-4">Actividad 9</h1>

<div class="row d-flex align-items-center">
    <div class="col-12">
        <div style="display: flex; min-height: 50vh; align-items: center; justify-content: center;">
            <div class="card bg-dark shadow border-0" style="width: 75vw;">
                <div class="card-header p-4 bg-warning">
                    <h5 class="card-title display-3">Datos del usuario</h5>
                    <p class="card-text">Estos datos serán usados para conseguir algunas estadísticas</p>
                </div>
                <div class="card-body px-4">
                    <form action="form2.php" method="post">
                        <div class="my-4">
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                        </div>

                        <div class="my-4">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>

                        <div class="my-4">
                            <input type="number" class="form-control" name="edad" placeholder="Edad" require>
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
<?php require "../templates/footer.php"; ?>