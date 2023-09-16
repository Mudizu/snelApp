<?php
include_once 'DataBase.php';
include_once 'admin.php';

class Fadmin {
    //Insert Admin
    static function AddAdmin (admins $valeur) {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('INSERT INTO admins SET nom=?, Mdp=?, IdAdmin=?, Rol=?');
        $Prepare->execute(array(
            $valeur->getNom(),
            $valeur->getMdp(),
            $valeur->getIdAdmin(),
            $valeur->getRol(),
        ));
    }
    //Liste Admin (Lire tous les admins)
    static function ReadAdmin() {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('SELECT * FROM admins');
        $Prepare->execute();
        return $Prepare->fetchAll();
    }
    //Lire un admin par son Id
    static function ReadOneAdmin($id) {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('SELECT * FROM admins WHERE id=?');
        $Prepare->execute(array($id));
        return $Prepare->fetch();
    }
    //Editer Admin
    static function EditAdmin(admins $valeur) {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('UPDATE admins SET Nom=?, Mdp=?, Rol=? WHERE id=?');
        $Prepare->execute(array(
            $valeur->getNom(),
            $valeur->getMdp(),
            $valeur->getRol(),
            $valeur->getId(),
        ));
    }
    static function DeleteAdmin(admins $valeur) {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('DELETE FROM admins WHERE id=?');
        $Prepare->execute(array($valeur->getId(),));
    }
    static function DernierId (){
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('SELECT MAX(IdAdmin) FROM admins');
        $Prepare->execute();
        return $Prepare->fetchAll();
    }
    static function CountAdmin () {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('SELECT COUNT(*) as nombre FROM admins');
        $Prepare->execute(array());
        return $Prepare->fetch()['nombre'];
    }
    // **********Login*************
    static function Login ($IdAdmin, $Mdp) {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('SELECT * FROM admins WHERE IdAdmin=? AND Mdp=?');
        $Prepare->execute(array($IdAdmin, $Mdp));
        if ($Prepare->rowCount()==0){
            return false;
            header('Location: login.php');
        }
        return $Prepare->fetch();
    }
    //*********Check-Admin-IfExist***********/
    static function checkAdmin ($IdAdmin) {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('SELECT * FROM admins WHERE IdAdmin=?');
        $Prepare->execute(array($IdAdmin));
        if ($Prepare->rowCount()==0){
            return true;
        }
        return false;
    }
}