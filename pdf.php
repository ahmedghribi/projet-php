<?php session_start();
include_once 'php-firewall/firewall.php';
include_once 'includes/security.php';
include_once 'includes/connexion.php';

//initialisation des variables $controleur et $action 
$controller='dashboard'; 
$action=''; 
//Recupération 
if(isset($_REQUEST['controller'])) 
$controller =$_REQUEST['controller']; 

if(isset($_REQUEST['action'])) 
$action =$_REQUEST['action'];

include('fpdf/fpdf.php');
include "models/pdf.class.php";
$pdf=new pdf();

include 'controllers/'.$controller.'.controller.php'; 
$pdf->Output();
?>

