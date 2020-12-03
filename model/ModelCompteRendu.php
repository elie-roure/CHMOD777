<?php


class ModelCompteRendu
{
	private $id;

	public static function getAllVoitures() {
		$rep = Model::$pdo->query("SELECT * FROM CompteRendu");
		$rep->setFetchMode(PDO::FETCH_CLASS, 'ModelCompteRendu');
		$tab_compteRendu = $rep->fetchAll();

		return $tab_compteRendu;
	}
}