<?php
include_once '../modals/abonne.php';
include_once '../modals/Fabonne.php';
$abonne=new abonne($_POST['Id_'], $_POST['nom'], $_POST['Phone'], $_POST['adresse'], null, $_POST['ID-Compteur'], $_POST['categorieAbonne'], $_POST['Statut'], $_POST['Mdp'], null);
Fabonne::EditAbonne($abonne);
header('Location: ../abonne.php');