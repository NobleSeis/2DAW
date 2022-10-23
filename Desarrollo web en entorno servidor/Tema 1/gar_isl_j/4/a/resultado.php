<?php
function makeComputerChoice()
{
  $options = array('piedra', 'papel', 'tijeras', 'lagarto', 'spock');
  return $options[array_rand($options)];
}

function getImage($choice)
{
  if ($choice) {
    switch ($choice) {
      case 'piedra':
        $src = '/gar_isl_j/4/a/assets/piedra.webp';
        break;
      case 'papel':
        $src = '/gar_isl_j/4/a/assets/papel.webp';
        break;
      case 'tijeras':
        $src = '/gar_isl_j/4/a/assets/tijeras.png';
        break;
      case 'lagarto':
        $src = '/gar_isl_j/4/a/assets/lagarto.png';
        break;
      case 'spock':
        $src = '/gar_isl_j/4/a/assets/spock.jpg';
        break;
    }
    return $src;
  }
}

function resultado($playerChoice, $computerChoice)
{
  if ($playerChoice == $computerChoice) {
    return 'Empate';
  }

  if ($playerChoice == 'piedra' && ($computerChoice == 'tijeras' || $computerChoice == 'lagarto')) {
    return '¡Ganaste!';
  } else if ($playerChoice == 'papel' && ($computerChoice == 'piedra' || $computerChoice == 'spock')) {
    return '¡Ganaste!';
  } else if ($playerChoice == 'tijeras' && ($computerChoice == 'papel' || $computerChoice == 'lagarto')) {
    return '¡Ganaste!';
  } else if ($playerChoice == 'lagarto' && ($computerChoice == 'papel' || $computerChoice == 'spock')) {
    return '¡Ganaste!';
  } else if ($playerChoice == 'spock' && ($computerChoice == 'piedra' || $computerChoice == 'tijeras')) {
    return '¡Ganaste!';
  } else {
    return 'Perdiste...';
  }
}

$computerChoice = makeComputerChoice();
$playerChoice = $_GET['choice'];
?>

<?php require('../../templates/header.php'); ?>
<nav class="mb-5" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb bg-light p-3">
    <li class="breadcrumb-item"><a href="/gar_isl_j/inicio.php">Inicio</a></li>
    <li class="breadcrumb-item"><a href="../actividad4.php">Actividad 4</a></li>
    <li class="breadcrumb-item"><a href="apartadoa.php">Apartado A</a></li>
    <li class="breadcrumb-item active">Resultado</li>
  </ol>
</nav>

<div style="font-family: 'Press Start 2P';" class="text-center">
  <h1 class="display-5">Piedra Papel Tijeras Lagarto Spock</h1>
  <h3 class="m-5" style="text-decoration: underline;">Resultado</h3>
  <div class="row align-items-center">
    <div class="col-12 col-sm-5">
      <img class="rounded-circle col-6" src="<?= getImage($playerChoice) ?>">
    </div>
    <div class="col-12 col-sm-2 my-4">
      <h2 style="
      background-image:linear-gradient(90deg, rgba(217,31,31,1) 0%, rgba(251,255,57,1) 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;">
        VS
      </h2>
    </div>
    <div class="col-12 col-sm-5">
      <img class="rounded-circle col-6" src="<?= getImage($computerChoice) ?>" alt="Papel">
    </div>
  </div>
  <div class="row align-items-center">
    <div class="col-12">
      <h1 class="m-5" style="text-decoration: underline;"><?= resultado($playerChoice, $computerChoice) ?></h1>
    </div>
    <div class="col-12 mt-5">
      <div class="d-grid gap-2 col-6 mx-auto">
        <a class="btn btn-success" href="apartadoa.php">Volver</a>
      </div>
    </div>
  </div>
</div>

<?php require('../../templates/footer.php'); ?>