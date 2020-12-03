<?php
require_once File::build_path(array("model","ModelCompteRendu.php"));

class ControllerCompteRendu {

	public static function readAll() {
		//$tab_v = ModelCompteRendu::getAllCompteRendu();     //appel au modèle pour gerer la BD
		$controller='CompteRendu';
		$view='list';
		$pagetitle='Liste des compte rendu';
		require File::build_path(array("view","view.php"));  //"redirige" vers la vue

	}
}
?>
