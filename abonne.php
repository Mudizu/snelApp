<?php
// session_start();
// if(!isset($_SESSION['nom'])){
//   header("Location: index.php");
// }
;?>



<?php
  include_once 'modals/Fabonne.php';
  $AllAbonne = Fabonne::ReadAbonne();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
  <link rel="shortcut icon" href="./img/gestion.png" />
  <link rel="stylesheet" href="./styles/styles.css" />
  <title>Abonné</title>
</head>

<body>

  <div class="grid-container">
    <?php include_once 'commons/header.php'; ?>
    <?php include_once 'commons/sidebar.php'; ?>

    <main class="main-container">
      <div class="main-tittle">
        <p class="fw-600">Liste Abonnés</p>
        <div class="main-tittle-side">
          <a href="addAbonne.php" class="main-tittle-sider">
            <span class="material-icons-outlined"> add_circle_outline </span>
            <p>Ajouter un nouvel abonné</p>
          </a>
        </div>
      </div>
      <div class="container-abonne">
        <!-- <div class="recherche-abonne">
          <span class="material-icons-outlined"> person_search </span>
          <input type="text" placeholder="Rechercher un abonné" />
        </div> -->

        <div class="list-abonne">
          <table>
            <thead>
              <tr>
                <td>#</td>
                <td>Nom et PostNom</td>
                <td>Adresse</td>
                <td>ID-Compteur</td>
                <td>Phone</td>
                <td>Catégorie</td>
                <!-- <td>Mdp</td> -->
                <td>Status</td>
                <td>Action</td>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($AllAbonne as $k => $valeur) : ?>
                <tr>
                  <td><?= $k + 1; ?></td>

                  <td><a href="ID-abonne.php?Id_=<?= $valeur['Id']; ?>&IdCompteur_=<?=$valeur['IdCompteur'];?>"><?= $valeur['nom']; ?></a></td>

                  <td> <?= $valeur['adresse']; ?> </td>

                  <td><?= $valeur['IdCompteur']; ?></td>

                  <td><?= $valeur['phone']; ?></td>

                  <td><?= $valeur['Categorie']; ?></td>
                  <!-- <td>1234</td> -->

                  <td><span class="status CONNECT"><?= $valeur['Statut']; ?></span></td>

                  <td class="actions">
                    <a href="editAbonne.php?Id_=<?= $valeur['Id']; ?>">Modifier|</a>
                    <a href="controllers/isolerAbonne.php?Id_=<?= $valeur['Id']; ?>">Isoler|</a>
                    <a href="controllers/connecterAbonne.php?Id_=<?= $valeur['Id']; ?>">Connecter</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </main>
  </div>

</body>

</html>