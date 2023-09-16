<?php
include_once '../modals/admin.php';
include_once '../modals/Fadmin.php';
$admin=new admins($_POST['Id_'], $_POST['nom'], $_POST['password'], null, $_POST['role'], null);
Fadmin::EditAdmin($admin);
header('Location: ../admin.php');