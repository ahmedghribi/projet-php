<?php //session_start();
include "models/fonction.class.php";
include "models/typeclient.class.php";


//initialisation des parametres
//$tab_ext=array('jpg','png','gif','JPG','PNG','GIF');
$fn=new fonction();
$id="";
$nom="";
$description="";
$remise="";


//recupétation des variables externes
if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];

if(isset($_REQUEST['id']))
$id=$_REQUEST['id'];

if(isset($_REQUEST['nom']))
$nom=$_REQUEST['nom'];

if(isset($_POST['description']))
$description=$_POST['description'];

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
$tycl= new typeclient($id,$nom,$description, $remise);


switch($action){
	case "add1": 
	include "views/typeclient/ajout.php";
	break;
	
	case "add":$tycl->add($cnx);
	break;
	
	case "supp":$tycl->supp($cnx);
	break;
	
	case "liste":$typeclients=$tycl->liste($cnx);
	include "views/typeclient/liste.php";
	break;
	
	case "edit1":$typeclients=$tycl->detail($cnx);
	include "views/typeclient/modifier_typeclient.php";
	break;
	
	case "edit":$tycl->edit($cnx);
	break;
}
?>