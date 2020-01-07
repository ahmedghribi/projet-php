<?php //session_start();
include "models/fonction.class.php";
include "models/client.class.php";


//initialisation des parametres
$tab_ext=array('jpg','png','gif','JPG','PNG','GIF');
$fn=new fonction();
$id="";
$type="";
$nom="";
$tel="";
$email="";
$remise="";
$action="";


//recupétation des variables externes
if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];

if(isset($_REQUEST['id']))
$id=$_REQUEST['id'];

if(isset($_REQUEST['type']))
$type=$_REQUEST['type'];

if(isset($_POST['nom']))
$nom=$_POST['nom'];

if(isset($_POST['tel']))
$tel=$_POST['tel'];

if(isset($_POST['email']))
$email=$_POST['email'];

if(isset($_POST['remise']))
$remise=$_POST['remise'];

/* if(isset($_FILES['photo']))
{

if(is_uploaded_file($_FILES['photo']['tmp_name']))
{
	if(!empty($photo))
	unlink("img/".$photo);

	$photo=$_FILES['photo']['name'];
	$tab=explode('.',$photo);
	$ext=strtolower($tab[sizeof($tab)-1]);
	if(!in_array($ext,$tab_ext)){
		echo "erreur d extention!";
		exit();
	}
	
	$nom_photo=$fn->generer_chaine(8);
	
	$photo=$nom_photo.".".$ext;
	
	copy($_FILES['photo']['tmp_name'],'img/'.$photo);
}
}
*/
//creation de l'objet
$cl=new client($id,$type,$nom, $tel, $email, $remise);



switch($action){
	case "add1": $typeclients=$cl->fk_type($cnx);
	include "views/client/ajout.php";
	break;
	
	case "add":$cl->add($cnx);
	break;
	
	case "supp":$cl->supp($cnx);
	break;
	
	case "liste":$clients=$cl->liste($cnx);
	include "views/client/liste.php";
	break;
	
	case "edit1":$clients=$cl->detail($cnx);
	include "views/client/modifier_produit.php";
	break;
	
	case "edit":$cl->edit($cnx);
	break;
}
?>