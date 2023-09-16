<?php
include_once '../modals/payment.php';
include_once '../modals/Fpayment.php';
$payment=new payement(null, $_POST['IdAb'], $_POST['IdMontant'], $_POST['mois-payement'], 'RefJ23', null);
Fpayment::AddPayment($payment);
header('Location: ../payement.php');