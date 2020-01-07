<?php
class typeclient extends fonction
{
private $id;
private $nom;
private $description;


public function __construct($id, $nom, $description,$remise)
{
$this->id = $id;
$this->nom = $nom;
$this->description = $description;
$this->remise = $remise;

}
public function add($cnx){
	$res=$cnx->prepare("insert into typeclient (nom, description, remise) values(?,?,?)");
	$res->execute([$this->nom, $this->description,$this->remise]);
	$this->redirect("index.php?controller=typeclient&action=liste");
}

public function edit($cnx){
	$res=$cnx->prepare("update typeclient set nom=?,description=?,remise=? where id=?");
	$res->bindParam(1,$this->nom);
	$res->bindParam(2,$this->description);
	$res->bindParam(3,$this->remise);
	$res->bindParam(4,$this->id);
	$res->execute();
	$this->redirect("index.php?controller=typeclient&action=liste");
}

public function supp($cnx){
	$cnx->exec("delete from typeclient where id='".$this->id."'");
	//unlink("img/".$this->photo);
	$this->redirect("index.php?controller=typeclient&action=liste");
}

public function liste($cnx){
	$typeclients=$cnx->query("select * from typeclient")->fetchAll(PDO::FETCH_OBJ);
	return $typeclients;
}

public function detail($cnx){
	$typeclients=$cnx->query("select * from typeclient where id='".$this->id."'")->fetch(PDO::FETCH_OBJ);
	return $typeclients;
}

public function fk($cnx){
	$familles=$cnx->query("select * from famille")->fetchAll(PDO::FETCH_OBJ);
	return $familles;
}

}
?>