<?php require('../templates/header.php'); ?>
<nav class="mb-5" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb bg-light p-3">
        <li class="breadcrumb-item"><a href="../inicio.php">Inicio</a></li>
        <li class="breadcrumb-item active">Actividad 5</li>
    </ol>
</nav>

<h3 class="mb-4">Respondiendo preguntas sobre control de versiones, Git y Github</h3>
<div class="container-fluid mt-5">
    <ul class="nav nav-tabs px-5 row">
        <li class="nav-item col-sm-12 col-md-3">
            <a class="nav-link active text-dark" data-bs-toggle="tab" href="#actividad1">Actividad A</a>
        </li>
        <li class="nav-item col-sm-12 col-md-3">
            <a class="nav-link text-dark" data-bs-toggle="tab" href="#actividad2">Actividad B</a>
        </li>
        <li class="nav-item col-sm-12 col-md-3">
            <a class="nav-link text-dark" data-bs-toggle="tab" href="#actividad3">Actividad C</a>
        </li>
        <li class="nav-item col-sm-12 col-md-3">
            <a class="nav-link text-dark" data-bs-toggle="tab" href="#actividad4">Actividad D</a>
        </li>
    </ul>
</div>
<div class="tab-content my-4">
    <!-- Actividad 1 -->
    <div class="tab-pane container active" id="actividad1">
        <h5 class="my-4 bg-dark p-5 text-white rounded">
            ¿Qué es un control de versiones? ¿Qué diferencias hay entre uno centralizado y otro distribuido?
        </h5>
        <dl>
            <dt>Control de versiones</dt>
            <dd>
                El control de versiones es la gestion de los cambios durante el desarrollo de un software.
            </dd>
            <dt>Diferencias</dt>
            <dd>
                La principal diferencia entre un control de versiones centralizado y uno distribuido consiste en:
                <ul>
                    <li>Un control de versiones centralizado requiere de un repositorio central</li>
                    <li>En un control de versiones distribuido sin embargo cada usuario es un repositorio
                        completo que luego se sincroniza con un repositorio central</li>
                </ul>
            </dd>
        </dl>
    </div>

    <!-- Actividad 2 -->
    <div class="tab-pane container fade" id="actividad2">
        <h5 class="my-4 bg-dark p-5 text-white rounded">
            ¿Qué es Git? ¿Y GitHub? ¿En qué se diferencian y cómo se relacionan entre sí?
        </h5>
        <dl>
            <dt>Git</dt>
            <dd>
                Git es un software de control de versiones
            </dd>
            <dt>GitHub:</dt>
            <dd>
                GitHub es una plataforma para alojar proyectos usando el control de versiones Git.
            </dd>

            <dt>Diferencia y relación:</dt>
            <dd>
                Ambos, Git y GitHub son cosas completamente diferentes, Git es el sistema de control de versiones
                mientras que GitHub usa dicho control de versiones para ofrecer un lugar donde disponer de repositorios
                publicos o privados y ayudar al desarrollo colaborativo.
            </dd>
        </dl>
    </div>

    <!-- Actividad 3 -->
    <div class="tab-pane container fade" id="actividad3">
        <h5 class="my-4 bg-dark p-5 text-white rounded">
            Hazte una cuenta, si no la tienes, en GitHub con un nombre de usuario serio y profesional.
        </h5>
        <p>
            Ya dispongo de una cuenta en GitHub y es la que utilizo en mi trabajo:
            <a href="https://github.com/NobleSeis" target="_blank">@NobleSeis</a>
        </p>
        <small>(Puede que el nombre no sea muy profesional pero la uso profesionalmente así que no la voy a cambiar)</small>

    </div>

    <!-- Actividad 4 -->
    <div class="tab-pane container fade" id="actividad4">
        <h5 class="my-4 bg-dark p-5 text-white rounded">
            Crea un proyecto en GitHub de una aplicación web tuya y usa Git para subir el código.
        </h5>
        <p>
            Ya dispongo de un repositorio público en el que voy subiendo las actividades del curso:
            <a href="https://github.com/NobleSeis/2DAW" target="_blank">@NobleSeis/2DAW</a>
        </p>
    </div>
</div>
<?php require('../templates/footer.php'); ?>