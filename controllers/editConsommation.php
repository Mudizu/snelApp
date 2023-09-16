<?php
include_once '../modals/consommation.php';
include_once '../modals/Fconsommation.php';
$consommation=new consommation(null, $_POST['IdCompteur_'], $_POST['energie'], $_POST['Mois'], null);
Fconsommation::EditConsommation($consommation);
header('Location: ../abonne.php');