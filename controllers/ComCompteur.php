<?php
include_once '../modals/Fconsommation.php';
include_once '../modals/Fcompteur.php';
include_once '../modals/Fcommunication.php';
include_once '../modals/Fabonne.php';
$AllAbonne = Fabonne::ReadAbonneForStatut($_GET['IdCompteur']);
// print_r($AllAbonne);
// $mrc=$AllAbonne['phone'];



// $data = Fcompteur::GetInfosCount($_GET['IdCompteur']);
// echo $data;

if (isset($_GET['IdCompteur'], $_GET['energie']) && Fcompteur::checkIfCompteurExist($_GET['IdCompteur'])) {
    $data = Fcompteur::GetInfosCount($_GET['IdCompteur']);
    // print_r($data);
    $timelog=date('H:i:s');


    if(Fconsommation::CheckDataConsommation($data['IdCompteur'],date('m',time()))){
        $Consommation=Fconsommation::DataConsommation($data['IdCompteur'],date('m',time()));
        $Energy=$Consommation['energie'];
        $Energy=$Energy+$_GET['energie'];
        $record=new consommation(null,$data['IdCompteur'],$Energy, date('m',time()), null);
        Fconsommation::EditConsommation($record);
        
        // echo "-1,"; //Update

    }
    else {
        $record=new consommation(null,$data['IdCompteur'],$_GET['energie'], date('m', time()), null);
        Fconsommation::AddConsommation($record);
        // echo "-2,"; //Ajout
    }
}
else {
    // echo "-3,"; //Erreur
}
$Statut=Fcommunication::checkStatut($AllAbonne[0]['IdAbonne']);
// print ($Statut['Statut']);
if($Statut['Statut']=="CONNECT")
{
    // echo "1";
    echo $b=1;
} else {
    // echo "0";
    echo $b=0;
}
