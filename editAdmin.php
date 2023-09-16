<?php
// session_start();
// if (!isset($_SESSION['nom'])) {
//   header("Location: index.php");
// }; ?>


<?php
include_once 'modals/Fadmin.php';
$OneAdmin = Fadmin::ReadOneAdmin($_GET['Id_']);
$AllAdmin = Fadmin::ReadAdmin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
  <link rel="shortcut icon" href="./img/icon-admin.png" />
  <link rel="stylesheet" href="./styles/styles.css" />
  <title>Edit-Admin</title>
</head>

<body>
  <div class="grid-container">

    <?php
    include_once 'commons/header.php';
    ?>
    <?php
    include_once 'commons/sidebar.php';
    ?>

    <main class="main-container">
      <div class="main-tittle">
        <p class="fw-600">Modifier Admin</p>
      </div>

      <div class="container-admin">
        <div class="list-admin">
          <table>
            <thead>
              <tr>
                <td>#</td>
                <td>Nom</td>
                <td>IdAdmin</td>
                <td>Rôle</td>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($AllAdmin as $k => $valeur) : ?>
                <tr>
                  <td><?= $k + 1; ?></td>
                  <td><?= $valeur['Nom']; ?></td>
                  <td><?= $valeur['IdAdmin']; ?></td>
                  <td><?= $valeur['Rol']; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

        <div class="form-admin">
          <form action="controllers/editAdmin.php" method="post">
            <h2>Modifier l'Admin</h2>
            <input type="hidden" id="id" name="Id_" value="<?= $OneAdmin['id']; ?>">

            <div class="inputBox">
              <input type="text" id="nom" name="nom" value="<?= $OneAdmin['Nom']; ?>" required />
              <label for="nom">Nom</label>
            </div>

            <div class="inputBox">
              <input type="number" id="role" name="role" value="<?= $OneAdmin['Rol']; ?>" required />
              <label for="role">Rôle</label>
            </div>

            <div class="inputBox">
              <input type="password" id="password" name="password" value="<?= $OneAdmin['Mdp']; ?>" required />
              <label for="password">Mot de passe</label>
            </div>

            <input type="submit" class="submit" value="Modifier" />
          </form>
        </div>
      </div>
    </main>
  </div>

</body>

</html>