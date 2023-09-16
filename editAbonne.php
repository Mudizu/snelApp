<?php
// session_start();
// if (!isset($_SESSION['nom'])) {
//   header("Location: index.php");
// }; ?>

<?php
  include_once 'modals/Fabonne.php';
  $OneAbonne=Fabonne::ReadOneAbonne($_GET['Id_']);
//   print_r ($OneAbonne);
//   echo 'editAbonne';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
    <link rel="shortcut icon" href="./img/ajouter-un-bouton.png" />
    <link rel="stylesheet" href="./styles/styles.css" />
    <title>Modifier l'abonné</title>
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
            <div class="add-new-abonne">
                <form action="controllers/editAbonne.php" method="POST">
                    <h2>Modifier l'abonné</h2>

                    <input type="hidden" id="id" name="Id_" value="<?=$OneAbonne['Id'];?>">
                    <input type="hidden" id="Statut" name="Statut" value="<?=$OneAbonne['Statut'];?>">
                    <input type="hidden" id="Mdp" name="Mdp" value="<?=$OneAbonne['Mdp'];?>">

                    <div class="inputBox">
                        <input type="text" id="nom" name="nom" value="<?=$OneAbonne['nom'];?>" required />
                        <label for="nom">Nom</label>
                    </div>

                    <div class="inputBox">
                        <input type="text" id="adresse" name="adresse" value="<?=$OneAbonne['adresse'];?>" required />
                        <label for="adresse">Adresse</label>
                    </div>

                    <div class="inputBox">
                        <input type="text" id="ID-Compteur" name="ID-Compteur" value="<?=$OneAbonne['IdCompteur'];?>" required />
                        <label for="ID-Compteur">ID-Compteur</label>
                    </div>

                    <div class="inputBox">
                        <input type="number" id="Phone" name="Phone" value="<?=$OneAbonne['phone'];?>" required />
                        <label for="Phone">Numéro de téléphone</label>
                    </div>
                    <div class="inputBox">
                        <select name="categorieAbonne" id="categorieAbonne" required>
                        <option value="">Choissisez une catégorie</option>
                        <?php
                        $categorie=array('Domestique', 'SCommercial', 'Commercial');
                        foreach ($categorie as $k=>$valeur):
                        ?>                            
                            <option value="<?=$categorie[$k]?>" <?php if ($categorie[$k]==$OneAbonne['Categorie']) echo 'selected'; ?>><?=$categorie[$k]?></option>
                        <?php endforeach; ?>  
                        </select>
                    </div>

                    <input type="submit" class="submit" value="Modifier" />

                </form>
            </div>
        </main>
    </div>
</body>

</html>