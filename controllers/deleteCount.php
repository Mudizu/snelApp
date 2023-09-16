<?php
include_once '../modals/compteur.php';
include_once '../modals/Fcompteur.php';
$count=new compteur($_GET['Id_'], $_GET['IdCompteur'], $_GET['Status']);
Fcompteur::DeleteCount($count);
header('Location: ../compteur.php');