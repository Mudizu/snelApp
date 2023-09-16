<?php
include_once '../modals/consommation.php';
include_once '../modals/Fconsommation.php';
$consommation=new consommation(null, null, $_POST['energie'], $_POST['Mois'], null);
Fconsommation::AddConsommation($consommation);
header('Location: ../abonne.php');