<?php
// session_start();
// if (!isset($_SESSION['nom'])) {
//   header("Location: index.php");
// }; ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
  <link rel="shortcut icon" href="./img/payment.png" />
  <link rel="stylesheet" href="./styles/styles.css" />
  <title>Payement</title>
</head>

<body>
  <div class="grid-container">
    <?php include_once 'commons/header.php'; ?>
    <?php include_once 'commons/sidebar.php'; ?>

    <main class="main-container">
      <div class="main-tittle">
        <p class="fw-600 titrePayement">Payement</p>
      </div>
      <!-- <div class="main-cards">
        <div class="card">
          <div class="card-inner">
            <p class="text-primary">100000</p>
            <span class="material-icons-outlined text-yellow"> people</span>
          </div>
          <span class="text-yellow fw-600">Total</span>
        </div>
        <div class="card">
          <div class="card-inner">
            <p class="text-primary">100000</p>
            <span class="material-icons-outlined text-green"> done_all</span>
          </div>
          <span class="text-green fw-600">actif</span>
        </div>
        <div class="card">
          <div class="card-inner">
            <p class="text-primary">100000</p>
            <span class="material-icons-outlined text-red"> remove_done</span>
          </div>
          <span class="text-red fw-600">isoler</span>
        </div>
      </div> -->

      <div class="payement">
        <form action="controllers/payment.php" method="post">
          <h2>reglé la facture</h2>

          <div class="inputBox">
            <input type="text" id="IdAb" name="IdAb" required />
            <label for="IdAb">ID-Abonné</label>
          </div>


          <div class="inputBox">
            <input type="number" id="IdMontant" name="IdMontant" required />
            <label for="IdMontant">Montant en CDF</label>
          </div>

          <div class="inputBox">
            <select name="mois-payement" id="mois-payement" required>
              <option value="">Choissisez le mois</option>
              <option value="jan">Janvier</option>
              <option value="fev">Février</option>
              <option value="mars">Mars</option>
              <option value="avril">Avril</option>
              <option value="mai">Mai</option>
              <option value="juin">Juin</option>
              <option value="juillet">Juillet</option>
              <option value="aout">Août</option>
              <option value="sept">Septembre</option>
              <option value="oct">Octobre</option>
              <option value="nov">Novembre</option>
              <option value="dec">Decembre</option>
            </select>
          </div>

          <input type="submit" class="payer" value="Payer" />

        </form>
      </div>


    </main>
  </div>
</body>

</html>