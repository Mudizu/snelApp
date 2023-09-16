<?php
// session_start();
// if (!isset($_SESSION['nom'])) {
//   header("Location: index.php");
// }; ?>

<?php
include_once 'modals/Fcompteur.php';
$AllCount = Fcompteur::ReadCount();

include_once 'modals/Fabonne.php';
$countCount = Fcompteur::CountCount();
$countFree = Fcompteur::CountFree();
$countNoFree = Fcompteur::CountOccupied();
// print_r ($countCount);
// print_r ($countFree);
// print_r($countNoFree);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
  <link rel="shortcut icon" href="./img/count-icon.jpg" />
  <link rel="stylesheet" href="./styles/styles.css" />
  <title>Compteur</title>
</head>

<body>
  <div class="grid-container">

    <?php include_once 'commons/header.php'; ?>
    <?php include_once 'commons/sidebar.php'; ?>

    <main class="main-container">
      <div class="main-tittle">
        <p class="fw-600">Les Compteurs</p>
      </div>
      <div class="main-cards count">
        <div class="card">
          <div class="card-inner">
            <p class="text-primary"><?=$countCount;?></p>
            <span class="material-icons-outlined text-yellow"> pin</span>
          </div>
          <span class="text-yellow fw-600">Total-compteur</span>
        </div>
        <div class="card">
          <div class="card-inner">
            <p class="text-primary"><?=$countNoFree;?></p>
            <span class="material-icons-outlined text-green"> done_all</span>
          </div>
          <span class="text-green fw-600">compteurs utilisés</span>
        </div>
        <div class="card">
          <div class="card-inner">
            <p class="text-primary"><?=$countFree;?></p>
            <span class="material-icons-outlined text-red"> remove_done</span>
          </div>
          <span class="text-red fw-600">compteurs non-utilisés</span>
        </div>
      </div>

      <div class="container-count">
        <div class="list-count">
          <table>
            <thead>
              <tr>
                <td>#</td>
                <td>ID-count</td>
                <td>Status</td>
                <td>Actions</td>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($AllCount as $k => $valeur) : ?>
                <tr>
                  <td><?= $k + 1; ?></td>
                  <td><?= $valeur['IdCompteur']; ?></td>
                  <td><span class="status-count occupied"><?= $valeur['Status']; ?></span></td>
                  <td><a href="controllers/deleteCount.php?Id_=<?= $valeur['id']; ?>">Supprimer</a></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <div class="add-count">
          <form action="controllers/addCount.php" method="post">
            <h2>Ajouter un nouveau compteur</h2>

            <div class="inputBox">
              <input type="text" id="IdCount" name="IdCount" required />
              <label for="IdCount">Entrez ID-Compteur</label>
            </div>

            <input type="submit" class="submit" value="Valider" />
          </form>
        </div>
      </div>

    </main>
  </div>
</body>

</html>