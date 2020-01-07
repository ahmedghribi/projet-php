<?php
class famille extends fonction
{
private $id;
private $nom;
private $designation;


public function __construct($id, $nom, $designation)
{
$this->id = $id;
$this->nom = $nom;
$this->designation = $designation;

}

public function add($cnx){
	$famille=$cnx->query("select * from famille where nom='".$this->nom."'")->fetch(PDO::FETCH_OBJ);
	if(is_object($famille)){
		
		echo '<script> alert("Famille déja existante !");</script>';
		$this->redirect("index.php?controller=famille&action=liste");
	}else{
		$res=$cnx->prepare("insert into famille (nom, designation ) values(?,?)");
	$res->execute([$this->nom, $this->designation]);
	$this->redirect("index.php?controller=famille&action=liste");
	}
	
}

public function edit($cnx){

	$cnx -> exec("update famille set nom ='".$this->nom."',designation = '".$this->designation."' where id='".$this->id."'");    
	$this->redirect("index.php?controller=famille&action=liste");
    
}

public function supp($cnx){
	$cnx->exec("delete from famille where id='".$this->id."'");
	$this->redirect("index.php?controller=famille&action=liste");
}

public function liste($cnx){
	$familles=$cnx->query("select * from famille")->fetchAll(PDO::FETCH_OBJ);
	return $familles;
}

public function detail($cnx){
	$familles=$cnx->query("select * from famille where id='".$this->id."'")->fetch(PDO::FETCH_OBJ);
	return $familles;
}

public function fk($cnx){
	$familles=$cnx->query("select * from famille")->fetchAll(PDO::FETCH_OBJ);
	return $familles;
}


}
?>