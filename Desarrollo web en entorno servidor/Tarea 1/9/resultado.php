<?php
require('../helpers/validate.php');

$archivo = '../assets/datos.csv';
$cabecera = ['Nombre', 'Email', 'Edad', 'Nivel', 'Lenguajes', 'Aprendizaje'];
$validatedData = validate($_POST);

// Preparando los datos para insertarlos

$datos[] = $validatedData['nombre'] ?? '';
$datos[] = $validatedData['email'] ?? '';
$datos[] = $validatedData['edad'] ?? '';
$datos[] = $validatedData['experiencia'] ?? '';
$datos[] = implode(",", $validatedData['lenguajes'] ?? []);
$datos[] = implode(",", $validatedData['aprendizaje'] ?? []);

$stream = fopen($archivo, 'a');
fputcsv($stream, $datos);

fclose($stream);
?>

<?php require "../templates/header.php" ?>
<div class="text-center">
    <h1>Gracias por contestar la encuesta, sus respuestas han sido almacenadas</h1>
    <h2 class="display-1">😉</h2>
</div>
<?php require "../templates/footer.php" ?>