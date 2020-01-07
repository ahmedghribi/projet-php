<?php
class dashboard extends fonction
{
private $produits;

public function __construct($pays)
{
	$this->famille = $famille;
}


public function etat1($cnx)
{
	$inscrits=$cnx->query("select * from produit where famille='".$this->famille."'")->fetchAll(PDO::FETCH_OBJ);
	return $produits;
}


public function fk($cnx)
{
	$familles=$cnx->query("select * from famille")->fetchAll(PDO::FETCH_OBJ);
	return $familles;
}

?>