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
    <link rel="shortcut icon" href="./img/ajouter-un-bouton.png" />
    <link rel="stylesheet" href="./styles/styles.css" />
    <title>Ajouter-Abonné</title>
</head>

<body>
    <div class="grid-container">
        <?php
        include_once 'commons/sidebar.php';
        ?>

        <main class="main-container">
            <div class="add-new-abonne">
                <form action="controllers/addAbonne.php" method="POST">
                    <h2>Identité de l'abonné</h2>

                    <div class="inputBox">
                        <input type="text" id="nom" name="nom" required />
                        <label for="nom">Nom</label>
                    </div>

                    <div class="inputBox">
                        <input type="text" id="adresse" name="adresse" required />
                        <label for="adresse">Adresse</label>
                    </div>

                    <div class="inputBox">
                        <input type="text" id="ID-Compteur" name="ID-Compteur" required />
                        <label for="ID-Compteur">ID-Compteur</label>
                    </div>

                    <div class="inputBox">
                        <input type="number" id="Phone" name="Phone" required />
                        <label for="Phone">Numéro de téléphone</label>
                    </div>
                    <div class="inputBox">
                        <select name="categorieAbonne" id="categorieAbonne" required>
                            <option value="">Choissisez une catégorie</option>
                            <option value="Domestique">Domestique</option>
                            <option value="SCommercial">Semi-Commercial</option>
                            <option value="Commercial">Commercial</option>
                        </select>
                    </div>

                    <input type="submit" class="submit" value="Valider" /> 

                </form>
            </div>
        </main>
    </div>
</body>

</html>