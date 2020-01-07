<?php //session_start();
include "models/fonction.class.php";
include "models/famille.class.php";

//initialisation des parametres

$fn=new fonction();
$id="";
$nom="";
$designation="";



if(isset($_REQUEST['id']))
$id=$_REQUEST['id'];

if(isset($_POST['nom']))
$nom=$_POST['nom'];

if(isset($_POST['designation']))
$designation=$_POST['designation'];


//creation de l'objet
$fam =new famille($id, $nom, $designation );


switch($action){
	case "login1":include "views/admin/login.php";
	break;
	
	case "login":$familles->login($cnx);
	break;
	
	case "logout":$familles->logout();
	break;
	
	case "add1":include "views/famille/ajout.php";
	break;
	
	case "add2":include "views/admin/ajout_serveur.php";
    break;

	case "add":$fam->add($cnx);
	break;
	
	case "supp":$fam->supp($cnx);
	break;
	
	case "liste":$familles=$fam->liste($cnx);
	include "views/famille/liste.php";
	break;
	
	case "edit1":$familles=$fam->detail($cnx);
	include "views/famille/modifier_famille.php";
	break;
	
	case "edit":$fam->edit($cnx);
    break;
    
    
}
