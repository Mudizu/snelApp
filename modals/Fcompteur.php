<?php
include_once 'DataBase.php';
include_once 'compteur.php';

class Fcompteur {
    //Ajouter un compteur
    static function AddCount (compteur $valeur) {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('INSERT INTO compteur SET IdCompteur=?, Status=?');
        $Prepare->execute(array(
            $valeur-> getIdCompteur(),
            $valeur->getStatus(),
        ));
    }
    //Lire toute la table du compteur
    static function ReadCount() {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('SELECT * FROM compteur');
        $Prepare->execute();
        return $Prepare->fetchAll();
    }
    //Lire la table du compteur en fonction de l'Id
    static function ReadOneCount($id) {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('SELECT * FROM compteur WHERE id=?');
        $Prepare->execute(array($id));
        return $Prepare->fetch();
    }
    static function DeleteCount(compteur $valeur) {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('DELETE FROM compteur WHERE id=?');
        $Prepare->execute(array($valeur->getId(),));
        return $Prepare->fetch();
    }
    static function GetInfosCount ($value) {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('SELECT * FROM compteur WHERE IdCompteur=? ');
        $Prepare->execute(array($value));
        return $Prepare->fetch();
    }
    static function checkIfCompteurExist($IdCompteur)
    {
        $con=DataBase::getConnection();
        $req=$con->prepare('SELECT * FROM compteur WHERE IdCompteur=?');
        $req->execute(array($IdCompteur));

        if($req->rowCount()==0)
        {
            return false;
        }
        return true;
    }
    static function CountCount () {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('SELECT COUNT(*) AS nombre FROM compteur');
        $Prepare->execute(array());
        return $Prepare->fetch()['nombre'];
    }
    static function CountOccupied () {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare("SELECT COUNT(*) AS nombre FROM compteur WHERE Status='occupied'");
        $Prepare->execute(array());
        return $Prepare->fetch()['nombre'];
    }
    static function CountFree () {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare("SELECT COUNT(*) AS nombre FROM compteur WHERE Status='free'");
        $Prepare->execute(array());
        return $Prepare->fetch()['nombre'];
    }
}