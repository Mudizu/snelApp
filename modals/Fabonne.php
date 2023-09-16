<?php
include_once 'DataBase.php';
include_once 'abonne.php';

class Fabonne {
    static function AddAbonne (abonne $valeur) {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('INSERT INTO abonne SET nom=?, phone=?, adresse=?, IdAbonne=?, IdCompteur=?,  Categorie=?, Statut=?, Mdp=?');
        $Prepare->execute(array(
            $valeur->getNom(),
            $valeur->getPhone(),
            $valeur->getAdresse(),
            $valeur->getIdAbonne(),
            $valeur->getIdCompteur(),
            $valeur->getCategorie(),
            $valeur->getStatut(),
            $valeur->getMdp(),
        ));
    }
    static function ReadAbonne() {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('SELECT * FROM abonne');
        $Prepare->execute();
        return $Prepare->fetchAll();
    }
    static function ReadOneAbonne($id) {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('SELECT * FROM abonne WHERE Id = ? ');
        $Prepare->execute(array($id));
        return $Prepare->fetch();
    }
    static function EditAbonne(abonne $valeur) {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('UPDATE abonne SET nom=?, phone=?, adresse=?, IdCompteur=?,  Categorie=?, Statut=?, Mdp=? WHERE Id=?');
        $Prepare->execute(array(
            $valeur->getNom(),
            $valeur->getPhone(),
            $valeur->getAdresse(),
            $valeur->getIdCompteur(),
            $valeur->getCategorie(),
            $valeur->getStatut(),
            $valeur->getMdp(),
            $valeur->getId(),
        ));
    }
    static function EditStatut(abonne $valeur) {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('UPDATE abonne SET Statut=? WHERE id=?');
        $Prepare->execute(array(
            $valeur->getStatut(),
            $valeur->getId(),
        ));
    }
    static function DernierId (){
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('SELECT MAX(IdAbonne) FROM abonne');
        $Prepare->execute();
        return $Prepare->fetchAll();
    }
    static function CountAbonne () {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('SELECT COUNT(*) AS nombre FROM abonne');
        $Prepare->execute(array());
        return $Prepare->fetch()['nombre'];
    }
    static function AbonneConnecter () {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare("SELECT COUNT(*) AS nombre FROM abonne WHERE Statut='CONNECT'");
        $Prepare->execute(array());
        return $Prepare->fetch()['nombre'];
    }
    static function AbonneIsoler () {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare("SELECT COUNT(*) AS nombre FROM abonne WHERE Statut='ISOLER'");
        $Prepare->execute(array());
        return $Prepare->fetch()['nombre'];
    }
    static function ReadAbonneForStatut($IdCompteur) {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('SELECT * FROM abonne WHERE IdCompteur=?');
        $Prepare->execute(array($IdCompteur));
        return $Prepare->fetchAll();
    }
    // static function EtatAbonne() {
    //     $con=DataBase::getConnection();
    //     $Prepare=$con->prepare('SELECT * FROM abonne');
    //     $Prepare->execute();
    //     return $Prepare->fetchAll();
    // }
}