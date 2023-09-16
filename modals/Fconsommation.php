<?php
include_once 'DataBase.php';
include_once 'consommation.php';

class Fconsommation {
    //LIRE TOUTES LES CONSOMMATIONS
    static function ReadConsommation() {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('SELECT * FROM consommation');
        $Prepare->execute();
        return $Prepare->fetchAll();
    }
    //LIRE LA CONSOMMATION  PAR ABONNE
    static function ReadOneConsommation($id) {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('SELECT * FROM consommation WHERE IdCompteur = ? ');
        $Prepare->execute(array($id));
        return $Prepare->fetchAll();
    }

    //EDIT CONSOMMATION
    static function EditConsommation(consommation $valeur) {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('UPDATE consommation SET energie=? WHERE IdCompteur=? AND Mois=?');
        $Prepare->execute(array(
            $valeur->getEnergie(),
            $valeur->getIdCompteur(),
            $valeur->getMois()
        ));
    }
    //AJOUTER UNE CONSOMMATION
    static function AddConsommation (consommation $valeur) {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('INSERT INTO consommation SET IdCompteur=?, energie=?, Mois=?');
        $Prepare->execute(array(
            $valeur->getIdCompteur(),
            $valeur->getEnergie(),
            $valeur->getMois(),
        ));
    }
    static function CheckDataConsommation($IdCompteur, $Mois) {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('SELECT * FROM consommation WHERE IdCompteur=? AND Mois=?');
        $Prepare->execute(array(
            $IdCompteur, $Mois
        ));

        if($Prepare->rowCount()==0)
        {
            return false;
        }
        return true;
    }
    static function DataConsommation($IdCompteur, $Mois) {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('SELECT energie FROM consommation WHERE IdCompteur=? AND Mois=?');
        $Prepare->execute(array(
            $IdCompteur, $Mois
        ));

        return $Prepare->fetch();
    }
}