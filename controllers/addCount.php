<?php
include_once '../modals/compteur.php';
include_once '../modals/Fcompteur.php';
$compteur=new compteur(null, $_POST['IdCount'], 'free');
// if ($_POST['IdCount']>8) {
//     Fcompteur::AddCount($compteur);
//     header('Location: ../compteur.php');
// }
// else {
//     echo 'incorrect' ;
// }
Fcompteur::AddCount($compteur);
header('Location: ../compteur.php');