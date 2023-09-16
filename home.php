<?php
// session_start();
// if (!isset($_SESSION['nom'])) {
  // header("Location: index.php");
// }; ?>


<?php
include_once 'modals/Fabonne.php';
$countAbonne = Fabonne::CountAbonne();
$AbonneConnecter = Fabonne::AbonneConnecter();
$AbonneIsoler = Fabonne::AbonneIsoler();
// print_r ($countAbonne);
// print_r ($AbonneConnecter);
// print_r($AbonneIsoler);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
  <link rel="shortcut icon" href="./img/accueil.png" />
  <link rel="stylesheet" href="./styles/styles.css" />
  <title>Home</title>
</head>

<body>
  <div class="grid-container">
    <?php include_once 'commons/header.php'; ?>
    <?php include_once 'commons/sidebar.php'; ?>

    <main class="main-container">
      <div class="main-tittle">
        <p class="fw-600">Home</p>
      </div>
      <div class="main-cards">
        <div class="card">
          <div class="card-inner">
            <p class="text-primary"><?= $countAbonne; ?></p>
            <span class="material-icons-outlined text-yellow"> people</span>
          </div>
          <span class="text-yellow fw-600">Total</span>
        </div>
        <div class="card">
          <div class="card-inner">
            <p class="text-primary"><?= $AbonneConnecter; ?></p>
            <span class="material-icons-outlined text-green"> done_all</span>
          </div>
          <span class="text-green fw-600">actif</span>
        </div>
        <div class="card">
          <div class="card-inner">
            <p class="text-primary"><?= $AbonneIsoler; ?></p>
            <span class="material-icons-outlined text-red"> remove_done</span>
          </div>
          <span class="text-red fw-600">isoler</span>
        </div>
      </div>

      <div class="charts">
        <div class="charts-card">
          <p class="chart-tittle">Quantité annuelle vendue</p>
          <div id="chart-bar"></div>
        </div>
      </div>
    </main>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="js/home.js"></script>
</body>

</html>