<?php
// session_start();
// if (!isset($_SESSION['nom'])) {
//   header("Location: index.php");
// }; ?>

<?php
  include_once 'modals/Fadmin.php';
  $AllAdmin = Fadmin::ReadAdmin();
// print_r ($AllAbonne);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
  <link rel="shortcut icon" href="./img/icon-admin.png" />
  <link rel="stylesheet" href="./styles/styles.css" />
  <title>Admin</title>
</head>

<body>
  <div class="grid-container">
    <?php include_once 'commons/header.php'; ?>
    <?php include_once 'commons/sidebar.php'; ?>
    <main class="main-container">
      <div class="main-tittle">
        <p class="fw-600">Liste Admin</p>
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
                <td>Action</td>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($AllAdmin as $k => $valeur) : ?>
                <tr>
                  <td><?= $k + 1; ?></td>
                  <td><?= $valeur['Nom']; ?></td>
                  <td><?= $valeur['IdAdmin']; ?></td>
                  <td><?= $valeur['Rol']; ?></td>
                  <td><a href="editAdmin.php?Id_=<?= $valeur['id'] ;?>">Modifier|</a><br><a href="controllers/deleteAdmin.php?Id_=<?= $valeur['id']; ?>">Banir|</a></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

        <div class="form-admin">
          <form action="controllers/addAdmin.php" method="post">
            <h2>Ajouter un nouveau Admin</h2>

            <div class="inputBox">
              <input type="text" id="nom" name="nom" required />
              <label for="nom">Nom</label>
            </div>

            <div class="inputBox">
              <input type="number" id="role" name="role" required />
              <label for="role">Rôle</label>
            </div>

            <div class="inputBox">
              <input type="password" id="Mdp" name="password" required />
              <label for="Mdp">Mot de passe</label>
            </div>

            <input type="submit" class="submit" value="Ajouter" />
          </form>
        </div>
      </div>
    </main>
  </div>

</body>

</html>