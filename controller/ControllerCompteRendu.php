<?php
require_once File::build_path(array("model","ModelCompteRendu.php"));

class ControllerCompteRendu {

	public static function readAll() {
		$tab_c = ModelCompteRendu::getAllCompteRendu();     //appel au modèle pour gerer la BD
		$controller='CompteRendu';
		$view='list';
		$pagetitle='Liste des compte rendu';
		require File::build_path(array("view","view.php"));  //"redirige" vers la vue
	}

	public static function read(){

		$c = ModelCompteRendu::getCompteRenduById($_GET["id_compteRendu"]);

		if ($c)
		{
			$view='detail';
			$pagetitle='Details de compte rendu';
			require File::build_path(array("view","view.php"));  //"redirige" vers la vue sans erreur
		}
		else
		{
			$view='error';
			$pagetitle='error';
			require File::build_path(array("view","view.php"));  //"redirige" vers la vue avec erreur
		}
	}
}
?>

