<?php
include_once '../modals/admin.php';
include_once '../modals/Fadmin.php';
$admin=new admins($_GET['Id_'], $_GET['Nom'], $_GET['Mdp'], $_GET['IdAdmin'], $_GET['Rol'], null);
Fadmin::DeleteAdmin($admin);
header('Location: ../admin.php');