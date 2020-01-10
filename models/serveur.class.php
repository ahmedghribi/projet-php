<?php
class serveur extends fonction
{
	public function __construct()
	{
	}

	public function listefamille($cnx)
	{
		$familles = $cnx->query("select * from famille")->fetchAll(PDO::FETCH_OBJ);
		return $familles;
	}
	public function listeproduit($cnx)
	{
		$produits = $cnx->query("select * from produit")->fetchAll(PDO::FETCH_OBJ);
		return $produits;
	}
	public function listeclient($cnx)
	{
		$clients = $cnx->query("select * from client")->fetchAll(PDO::FETCH_OBJ);
		return $clients;
	}
	public function listetclients($cnx)
	{
		$typeclients = $cnx->query("select * from typeclient")->fetchAll(PDO::FETCH_OBJ);
		return $typeclients;
	}
}
?>