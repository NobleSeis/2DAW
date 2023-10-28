<?php require "../templates/header.php" ?>
<h1 class="display-4 text-center bg-dark text-white rounded p-4 mb-4">Actividad 10</h1>

<?php

// Funciones para encontrar estadisticas y datos
function lenguajeMasPopular($lenguajes)
{
    $counts = array_count_values($lenguajes);
    arsort($counts); // Ordenar por frecuencia descendente
    $elMasPopular = key($counts);
    return $elMasPopular;
}

function formaDeAprenderMasPopular($aprendizaje)
{
    $counts = array_count_values($aprendizaje);
    arsort($counts); // Ordenar por frecuencia descendente
    $elMasPopular = key($counts);
    return $elMasPopular;
}

function mediaEdadEncuestados($sumatorio, $nRegistros)
{
    return round($sumatorio / $nRegistros);
}


// Recogiendo los datos
// Estructura del archivo de datos
define('NOMBRE', 0);
define('EMAIL', 1);
define('EDAD', 2);
define('EXPERIENCIA', 3);
define('LENGUAJES', 4);
define('APRENDIZAJE', 5);

// Tengo problemas porque un warning se muestra en pantalla, voy a desactivar la notificacion de errores
error_reporting(0);

try {
    $stream = fopen('../assets/datos.csv', 'r');
    if ($stream === false) {
        throw new Exception();
    }

    $lenguajes = [];
    $lenguajeExpertos = [];
    $aprendizaje = [];
    $sumatorioEdad = 0;

    $fila = 0;
    while ($datos[] = fgetcsv($stream)) {

        $lenguajes = array_merge($lenguajes, explode(',', $datos[$fila][LENGUAJES]));
        $aprendizaje = array_merge($aprendizaje, explode(',', $datos[$fila][APRENDIZAJE]));
        $sumatorioEdad += $datos[$fila][EDAD];

        if ($datos[$fila][EXPERIENCIA] === 'experto') {
            $lenguajeExpertos = array_merge($lenguajeExpertos, explode(',', $datos[$fila][LENGUAJES]));
        }
        $fila++;
    }
    if ($datos[0]) { // El archivo tiene datos?
?>
        <h3 class="text-center mb-4">Estas estadisticas han sido extraidas de los resultados de la encuesta de la actividad 9</h3>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card h-100">
                    <h4 class="card-header bg-warning text-center">Lenguaje de programación más usado</h4>
                    <div class="card-body bg-dark text-white text-center">
                        <h3 class="display-1"><?= ucfirst(lenguajeMasPopular($lenguajes)) ?></h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <h4 class="card-header bg-warning text-center">Método de aprendizaje más popular</h4>
                    <div class="card-body bg-dark text-white text-center">
                        <h3 class="display-1"><?= ucfirst(formaDeAprenderMasPopular($aprendizaje)) ?></h3>
                    </div>
                </div>
            </div>
            <?php
            if (!empty($lenguajeExpertos)) {
            ?>
                <div class="col">
                    <div class="card h-100">
                        <h4 class="card-header bg-warning text-center">Lenguaje de programación preferido por los expertos</h4>
                        <div class="card-body bg-dark text-white text-center">
                            <h3 class="display-1"><?= ucfirst(lenguajeMasPopular($lenguajeExpertos)) ?></h3>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="col">
                <div class="card h-100">
                    <h4 class="card-header bg-warning text-center">Media de edad de los encuestados</h4>
                    <div class="card-body bg-dark text-white text-center">
                        <h3 class="display-1"><?= ucfirst(mediaEdadEncuestados($sumatorioEdad, $fila)) ?> años</h3>
                    </div>
                </div>
            </div>
        </div>

<?php
    }
} catch (Exception $error) {
    require_once "../templates/noFile.php";
}
?>


<?php require "../templates/footer.php" ?>