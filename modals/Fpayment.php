<?php
include_once 'DataBase.php';
include_once 'payment.php';

class Fpayment {
    static function AddPayment (payement $valeur) {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare('INSERT INTO payement SET IdAbonne=?, montant=?, mois=?, Ref=?');
        $Prepare->execute(array(
            $valeur->getIdAbonne(),
            $valeur->getMontant(),
            $valeur->getMois(),
            $valeur->getRef(),
        ));
    }
    static function ReadOnePayment() {
        $con=DataBase::getConnection();
        $Prepare=$con->prepare("SELECT * FROM payement WHERE IdAbonne = 'AB00001' ");
        $Prepare->execute();
        return $Prepare->fetch();
    }
}