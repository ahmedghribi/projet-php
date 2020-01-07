<?php //session_start();
include "models/fonction.class.php";
include "models/admin.class.php";

//initialisation des parametres

$fn=new fonction();
$id="";
$nom="";
$prenom="";
$login="";
$password="";
$role="";



if(isset($_REQUEST['id']))
$id=$_REQUEST['id'];


if(isset($_POST['nom']))
$nom=$_POST['nom'];

if(isset($_POST['prenom']))
$prenom=$_POST['prenom'];

if(isset($_POST['login']))
$login=$_POST['login'];

if(isset($_POST['password']))
$password=$_POST['password'];

if(isset($_POST['role']))
$role=$_POST['role'];



//creation de l'objet
$admins =new admin($id, $nom, $prenom, $login, $password, $role);


switch($action){
	case "login1":include "views/admin/login.php";
	break;
	
	case "login":$admins->login($cnx);
	break;
	
	case "logout":$admins->logout();
	break;
	
	case "add1":include "views/admin/ajout.php";
	break;
	
	case "add2":include "views/admin/ajout_serveur.php";
    break;

	
	case "add":$admins->add($cnx);
	break;
	
	case "supp":$admins->supp($cnx);
	break;
	
	case "liste":$admins=$admins->liste($cnx);
	include "views/admin/liste.php";
	break;
	
	case "detail":$admins=$admins->detail($cnx);
	include "views/admin/detail.php";
	break;
	
	case "edit1":$admins=$admins->detail($cnx);
	include "views/admin/edit.php";
	break;
	
	case "edit":$admins->edit($cnx);
	break;

	
}
