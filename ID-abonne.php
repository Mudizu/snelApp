<?php
include_once 'modals/Fabonne.php';
include_once 'modals/Fconsommation.php';
include_once 'modals/Fcommunication.php';

// $tous=Fabonne::ReadAbonne();
// print_r($tous);
$OneConsommation = Fconsommation::ReadOneConsommation($_GET['IdCompteur_']);
// print_r($OneConsommation);
include_once 'modals/Fpayment.php';
// include_once 'controllers/ID-abonne.php';
// print_r($janvier);
$pay = Fpayment::ReadOnePayment();
// print_r($pay['mois']);
// print_r($pay['montant']);
// print_r($pay['IdAbonne']);
$OneAbonne = Fabonne::ReadOneAbonne($_GET['Id_']);
// print_r($OneAbonne);
// $consommation = Fconsommation::ReadOneConsommations();
// $consommation=Fconsommation::ReadConsommation();
// print_r($consommation);
// $Statut = 'Payer';
// $status = 'done';

// if ($consommation['IdCompteur'] === $OneAbonne['IdCompteur']) {
//     $Mois = ($consommation['Mois']);
//     $energie = $consommation['energie'];
//     $RecupNom = substr($OneAbonne['nom'], -3);
//     $RefFac = 'Ref.' . $Mois . $OneAbonne['IdAbonne'] . 'BT';
//     // print_r($energie);
//     $montant = 100 * $energie;
// } else {
//     $Mois = '--';
//     $RefFac = '--';
//     $energie = '--';
//     $montant = '--';
//     $status = 'fail';
// }
// if ($OneAbonne['IdAbonne'] === ($pay['IdAbonne']) and $Mois == ($pay['mois']) and $montant <= ($pay['montant'])) {
//     $Statut = 'Payer';
//     $status = 'done';
// } else {
//     $Statut = 'En cours';
//     $status = 'fail';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
    <link rel="shortcut icon" href="./img/gestion.png" />
    <link rel="stylesheet" href="./styles/styles.css" />
    <title>ID-abonné</title>
</head>

<body>

    <div class="grid-container">
        <?php
        include_once 'commons/header.php';
        ?>
        <?php
        include_once 'commons/sidebar.php';
        ?>

        <main class="main-container id-abonne">
            <div class="id-abonne-all">
                <table class="id-abonne-all-first">
                    <tr>
                        <td>Nom</td>
                        <td><?= $OneAbonne['nom']; ?></td>
                    </tr>
                    <tr>
                        <td>ID</td>
                        <td><?= $OneAbonne['IdAbonne']; ?></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td><?= $OneAbonne['phone']; ?></td>
                    </tr>
                    <tr>
                        <td>Adresse</td>
                        <td><?= $OneAbonne['adresse']; ?></td>
                    </tr>
                    <tr>
                        <td>Catégorie</td>
                        <td><?= $OneAbonne['Categorie']; ?></td>
                    </tr>
                </table>
            </div>
            <table>
                <caption>Consommation-facture</caption>
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Mois</td>
                        <td>Ref. Facture</td>
                        <td>Consommation</td>
                        <td>Montant en CDF</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($OneConsommation as $k => $valeur) : ?>
                        <tr>
                            <td><?= $k+1; ?></td>
                            <td><?= $valeur['Mois']; ?></td>
                            <td><?= "Ref.".$valeur['Mois'].$OneAbonne['IdAbonne']."BT"; ?></td>
                            <td><?= $valeur['energie'] . ' kWh'; ?></td>
                            <td><?= $valeur['energie'] * 1000; ?></td>
                            <td><span class="status-abonne <?= "fail"; ?>"><?= "En-Cours"; ?></span></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </main>
    </div>

</body>

</html>