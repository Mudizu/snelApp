<?php
include_once 'DataBase.php';
include_once 'abonne.php';


class Fcommunication {
    // static function EtatAbonne0() {
    //     $con=DataBase::getConnection();
    //     $Prepare=$con->prepare('SELECT * FROM abonne WHERE Statut="ISOLER"');
    //     $Prepare->execute();
    //     return 0;
    // }
    // static function EtatAbonne1() {
    //     $con=DataBase::getConnection();
    //     $Prepare=$con->prepare('SELECT * FROM abonne WHERE Statut="CONNECT"');
    //     $Prepare->execute();
    //     return 1;
    // }
    static function checkStatut($Statu)
    {
        $con=DataBase::getConnection();
        $req=$con->prepare('SELECT Statut FROM abonne WHERE IdAbonne=? ');
        $req->execute(array($Statu));
        return $req->fetch();
         

        // if($req[0]['IdAbonne']=="CONNECT")
        // {
        //     return 1;
        // } else {
        //     return 0;
        // }
    }
}