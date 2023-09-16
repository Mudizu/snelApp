<?php
if(isset($_POST['nom'], $_POST['password']) && !empty($_POST['password']))
{
    include_once '../modals/Fadmin.php';
    $data=Fadmin::Login($_POST['nom'], $_POST['password']);

    if (!$data){
        header('Location: ../login.php');
    }
    else {
        header('Location: ../home.php');
    }
} else {
    header('Location: ../login.php');
}