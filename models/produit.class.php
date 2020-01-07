<?php
class produit extends fonction
{
private $id;
private $nom;
private $id_famille;
private $prix;
private $tva;
private $photo;



public function __construct($id, $nom, $id_famille, $prix, $tva, $photo)
{
$this->id = $id;
$this->nom = $nom;
$this->id_famille = $id_famille;
$this->prix = $prix;
$this->tva = $tva;
$this->photo = $photo;

}
public function add($cnx){
	$res=$cnx->prepare("insert into produit (nom, id_famille, prix, tva, photo) values(?,?,?,?,?)");
	$res->execute([$this->nom, $this->id_famille,$this->prix,$this->tva,$this->photo]);
	$this->redirect("index.php?controller=produit&action=liste");
}

public function edit($cnx){
	$res=$cnx->prepare("update produit set nom=?,prix=?,tva=?,photo=? where id=?");
	$res->bindParam(1,$this->nom);
	//$res->bindParam(2,$this->id_famille);
	$res->bindParam(2,$this->prix);
	$res->bindParam(3,$this->tva);
	$res->bindParam(4,$this->photo);
	$res->bindParam(5,$this->id);
	$res->execute();
	$this->redirect("index.php?controller=produit&action=liste");
}

public function supp($cnx){
	$cnx->exec("delete from produit where id='".$this->id."'");
	unlink("img/".$this->photo);
	$this->redirect("index.php?controller=produit&action=liste");
}

public function liste($cnx){
	$produits=$cnx->query("select * from produit")->fetchAll(PDO::FETCH_OBJ);
	return $produits;
}

public function detail($cnx){
	$produits=$cnx->query("select * from produit where id='".$this->id."'")->fetch(PDO::FETCH_OBJ);
	return $produits;
}

public function fk($cnx){
	$familles=$cnx->query("select * from famille")->fetchAll(PDO::FETCH_OBJ);
	return $familles;
}

}
?>