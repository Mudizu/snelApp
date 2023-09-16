<?php
include_once '../modals/abonne.php';
include_once '../modals/Fabonne.php';
$abonne=new abonne($_GET['Id_'], null, null, null, null, null, null, 'ISOLER', null, null);
Fabonne::EditStatut($abonne);
header('Location: ../abonne.php');