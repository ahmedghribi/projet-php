<?php //session_start();

include "models/fonction.class.php";
include "models/dashboard.class.php";
//initialisation des parametres
$famille="";

if(isset($_REQUEST['famille']))
$famille=$_REQUEST['famille'];


//creation de l'objet
$dash=new dashboard($famille);


switch($action){
	case "index":include "views/dashboard/index.php";
	break;
	
	case "etat1":
		$familles=$prod->fk($cnx);
		$result=$dash->etat1($cnx);
	include "views/dashboard/etat1.php";
	break;
	
	case "pdfetat1":$result=$dash->etat1($cnx);
	include "views/dashboard/pdfetat1.php";
	break;
	
	case "exceletat1":$result=$dash->etat1($cnx);
	include "views/dashboard/exceletat1.php";
	break;
	
}
?>