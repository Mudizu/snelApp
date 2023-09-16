<?php
include_once '../modals/admin.php'; //fichier-dossier-modals
include_once '../modals/Fadmin.php';
$IdAdmin=Fadmin::DernierId();
if (Fadmin::CountAdmin()==0){
    $IdAdmin="AD001";
}
else {
    $IdAdmin=$IdAdmin[0]['MAX(IdAdmin)'];
    $IdAdmin++;
}
$admin=new admins(null, $_POST['nom'], $_POST['password'], $IdAdmin, $_POST['role'], null);
Fadmin::AddAdmin($admin);
header('Location: ../admin.php');