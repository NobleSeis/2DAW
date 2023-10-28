<?php require "../templates/header.php"; ?>
<h1 class="display-4 text-center bg-dark text-white rounded p-4 mb-4">Actividad 9</h1>

<div class="row d-flex align-items-center">
    <div class="col-12">
        <div style="display: flex; min-height: 50vh; align-items: center; justify-content: center;">
            <div class="card bg-dark shadow border-0" style="width: 75vw;">
                <div class="card-header p-4 bg-warning">
                    <h5 class="card-title display-3">Lenguajes de programación</h5>
                </div>
                <div class="card-body px-4">
                    <form action="resultado.php" method="post">
                        <input type="hidden" class="form-control" name="nombre" value="<?= $_POST['nombre'] ?? '' ?>">
                        <input type="hidden" class="form-control" name="email" value="<?= $_POST['email'] ?? '' ?>">
                        <input type="hidden" class="form-control" name="edad" value="<?= $_POST['edad'] ?? '' ?>">

                        <p class="bg-warning rounded p-1">¿Cuál es tu nivel de experiencia en programación?</p>
                        <div class="my-4 text-white">
                            <label>
                                <input type="radio" name="experiencia" value="principiante"> Principiante
                            </label>
                            <br>
                            <label>
                                <input type="radio" name="experiencia" value="intermedio"> Intermedio
                            </label>
                            <br>
                            <label>
                                <input type="radio" name="experiencia" value="avanzado"> Avanzado
                            </label>
                            <br>
                            <label>
                                <input type="radio" name="experiencia" value="experto"> Experto
                            </label>
                        </div>
                        <p class="bg-warning rounded p-1">¿Qué lenguajes de programación has utilizado? (Selecciona todos los que correspondan)</p>
                        <div class="my-4 text-white">
                            <label>
                                PHP
                                <input type="checkbox" name="lenguajes[]" value="php">
                            </label>
                            <br>
                            <label>
                                Python
                                <input type="checkbox" name="lenguajes[]" value="python">
                            </label>
                            <br>
                            <label>
                                Java
                                <input type="checkbox" name="lenguajes[]" value="java">
                            </label>
                            <br>
                            <label>
                                Javascript
                                <input type="checkbox" name="lenguajes[]" value="javascript">
                            </label>
                            <br>
                            <label>
                                C#
                                <input type="checkbox" name="c#lenguajes[]" value="c#">
                            </label>
                            <br>
                            <label>
                                Go
                                <input type="checkbox" name="lenguajes[]" value="go">
                            </label>
                            <br>
                            <label>
                                Kotlin
                                <input type="checkbox" name="lenguajes[]" value="kotlin">
                            </label>
                        </div>

                        <p class="bg-warning rounded p-1">¿Dónde aprendiste a programar? (Selecciona todos los que correspondan)</p>
                        <div class="my-4 text-white">
                            <label>
                                Universidad
                                <input type="checkbox" name="aprendizaje[]" value="universidad">
                            </label>
                            <br>
                            <label>
                                Cursos en línea
                                <input type="checkbox" name="aprendizaje[]" value="cursos">
                            </label>
                            <br>
                            <label>
                                Tutoriales en línea
                                <input type="checkbox" name="aprendizaje[]" value="tutoriales">
                            </label>
                            <br>
                            <label>
                                Amigos
                                <input type="checkbox" name="aprendizaje[]" value="amigos">
                            </label>
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