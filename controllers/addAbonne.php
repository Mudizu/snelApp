<?php
include_once '../modals/abonne.php';
include_once '../modals/Fabonne.php';
$IdAbonne=Fabonne::DernierId();
if (Fabonne::CountAbonne()==0){
    $IdAbonne="AB00001";
}
else {
    $IdAbonne=$IdAbonne[0]['MAX(IdAbonne)'];
    $IdAbonne++;
}
$abonne=new abonne(null, $_POST['nom'], $_POST['Phone'], $_POST['adresse'], $IdAbonne, $_POST['ID-Compteur'], $_POST['categorieAbonne'], 'ISOLER', '0000', null);
Fabonne::AddAbonne($abonne);
header('Location: ../abonne.php');