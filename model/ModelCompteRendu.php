<?php

require_once File::build_path(array("model","Model.php"));

class ModelCompteRendu
{
	private $id_compteRendu;
	private $id_spot;
	private $login;
	private $date_;
	private $duree_sessions;
	private $houle;
	private $meteo;
	private $pollution;
	private $txt_descriptif;

	public function __construct($id_compteRendu = NULL, $id_spot = NULL, $login = NULL, $date_ = NULL, $duree_sessions = NULL, $houle = NULL, $meteo = NULL, $pollution = NULL, $txt_descriptif = NULL) {
		if (!is_null($id_compteRendu) && !is_null($id_spot) && !is_null($login) && !is_null($date_) && !is_null($duree_sessions) && !is_null($houle) && !is_null($meteo) && !is_null($pollution) && !is_null($txt_descriptif)) {
			$this->id_compteRendu = $id_compteRendu;
			$this->id_spot = $id_spot;
			$this->login = $login;
			$this->date_ = $date_;
			$this->duree_sessions = $duree_sessions;
			$this->houle = $houle;
			$this->meteo = $meteo;
			$this->pollution = $pollution;
			$this->txt_descriptif = $txt_descriptif;
		}
	}

	public static function getAllCompteRendu() {
		$rep = Model::$pdo->query("SELECT * FROM CompteRendu");
		$rep->setFetchMode(PDO::FETCH_CLASS, 'ModelCompteRendu');
		$tab_compteRendu = $rep->fetchAll();

		return $tab_compteRendu;
	}

	public function afficher() {
		echo $this->id_compteRendu ." ". $this->couleur . " de plaque " . $this->immatriculation;
	}

	public static function getCompteRenduById($id) {
		$sql = "SELECT * from voiture WHERE id_compteRendu=:nom_tag";
		// Préparation de la requête
		$req_prep = Model::$pdo->prepare($sql);

		$values = array(
			"nom_tag" => $id,
		);

		$req_prep->execute($values);

		$req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelCompteRendu');
		$tab_c = $req_prep->fetchAll();
		// Attention, si il n'y a pas de résultats, on renvoie false
		if (empty($tab_c))
			return false;
		return $tab_c[0];
	}


	public function save(){

		$sql = "INSERT INTO CompteRendu(id_compteRendu, id_spot, login, date_, duree_sessions, houle, meteo, pollution, txt_descriptif) VALUES(:id_compteRendu, :id_spot, :login, :date_, :duree_sessions, :houle, :meteo, :pollution, :txt_descriptif)";
		$req_prep = Model::$pdo->prepare($sql);

		$values = array(
			"id_compteRendu" => $this->id_compteRendu,
			"id_spot" => $this->id_spot,
			"login" => $this->login,
			"date_" => $this->date_,
			"duree_sessions" => $this->duree_sessions,
			"houle" => $this->houle,
			"meteo" => $this->meteo,
			"pollution" => $this->pollution,
			"txt_descriptif" => $this->txt_descriptif,
		);

		try
		{
			$req_prep->execute($values);
		}
		catch(PDOException $e)
		{
			return false;
		}
	}
}