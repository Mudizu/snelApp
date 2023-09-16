<?php
// if(!isset($_SESSION)){
//   session_start();
// }
;?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./img/inconlogin.jpg" />
    <link rel="stylesheet" href="./styles/login.css" />
    <title>Login</title>
  </head>
  <body>
    <form action="controllers/login.php" method="post">
      <h2>S'identifier</h2>

      <div class="inputBox">
        <input type="text" id="nom" name="nom" required />
        <label for="nom">Entrez votre ID</label>
      </div>

      <div class="inputBox">
        <input type="password" id="password" name="password" required />
        <label for="password">Mot de passe</label>
      </div>

      <input type="submit" class="submit" value="Se connecter" />

      <a href="#" class="mdpOublier">Mot de passe oublier</a> <br />
    </form>
  </body>
</html>