<?php //session_start();
include "models/fonction.class.php";
include "models/produit.class.php";


//initialisation des parametres
$tab_ext=array('jpg','png','gif','JPG','PNG','GIF');
$fn=new fonction();
$id="";
$nom="";
$id_famille="";
$prix="";
$tva="";
$photo="";
$action="";


//recupétation des variables externes
if(isset($_REQUEST['action']))
$action=$_REQUEST['action'];

if(isset($_REQUEST['id']))
$id=$_REQUEST['id'];

if(isset($_REQUEST['photo_old']))
$photo=$_REQUEST['photo_old'];

if(isset($_POST['nom']))
$nom=$_POST['nom'];

if(isset($_POST['id_famille']))
$id_famille=$_POST['id_famille'];

if(isset($_POST['prix']))
$prix=$_POST['prix'];

if(isset($_POST['tva']))
$tva=$_POST['tva'];

if(isset($_FILES['photo']))
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

//creation de l'objet
$prod=new produit($id, $nom, $id_famille, $prix, $tva, $photo);



switch($action){
	case "add1": $familles=$prod->fk($cnx);
	include "views/produit/ajout.php";
	break;
	
	case "add":$prod->add($cnx);
	break;
	
	case "supp":$prod->supp($cnx);
	break;
	
	case "liste":$produits=$prod->liste($cnx);
	include "views/produit/liste.php";
	break;
	
	case "edit1":$produits=$prod->detail($cnx);
	include "views/produit/modifier_produit.php";
	break;
	
	case "edit":$prod->edit($cnx);
	break;
	
	case "serveur":$produits=$prod->liste($cnx);
	include "serveur.php";
	break;
}
?>