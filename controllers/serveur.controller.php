<?php //session_start();
include "models/fonction.class.php";
include "models/serveur.class.php";
$prod=new serveur();
switch($action){
	case "view":
	$produits=$prod->listeproduit($cnx);
	$familles=$prod->listefamille($cnx);
	$clients=$prod->listeclient($cnx);
	$typeclients=$prod->listetclients($cnx);
	include "views/serveur/vente.php";
	break;
	

}
?>