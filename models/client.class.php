<?php
class client extends fonction
{
	private $id;
	private $type;
	private $nom;
	private $tel;
	private $email;
	private $remise;



	public function __construct($id, $type, $nom, $tel, $email, $remise)
	{
		$this->id = $id;
		$this->type = $type;
		$this->nom = $nom;
		$this->tel = $tel;
		$this->email = $email;
		$this->remise = $remise;
	}
	public function add($cnx)
	{
		$res = $cnx->prepare("insert into client (type, nom, tel, email, remise) values(?,?,?,?,?)");
		$res->execute([$this->type, $this->nom, $this->tel, $this->email, $this->remise]);
		$this->redirect("index.php?controller=client&action=liste");
	}

	public function edit($cnx)
	{
		$res = $cnx->prepare("update client set nom=?,tel=?,email=? where id=?");
		$res->bindParam(1, $this->nom);
		$res->bindParam(2, $this->tel);
		$res->bindParam(3, $this->email);
		$res->bindParam(4, $this->id);
		$res->execute();
		$this->redirect("index.php?controller=client&action=liste");
	}

	public function supp($cnx)
	{
		$cnx->exec("delete from client where id='" . $this->id . "'");
		//unlink("img/".$this->photo);
		$this->redirect("index.php?controller=client&action=liste");
	}

	public function liste($cnx)
	{
		$clients = $cnx->query("select * from client")->fetchAll(PDO::FETCH_OBJ);
		return $clients;
	}

	public function detail($cnx)
	{
		$clients = $cnx->query("select * from client where id='" . $this->id . "'")->fetch(PDO::FETCH_OBJ);
		return $clients;
	}

	/*public function fk($cnx){
	$familles=$cnx->query("select * from famille")->fetchAll(PDO::FETCH_OBJ);
	return $familles;
}
*/
	public function fk_type($cnx)
	{
		$typeclients = $cnx->query("select * from typeclient where id='" . $this->id . "'")->fetchAll(PDO::FETCH_OBJ);
		return $typeclients;
	}
}
