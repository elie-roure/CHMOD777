<?php

require_once File::build_path(array("controller","ControllerCompteRendu.php"));

// On recupère l'action passée dans l'URL
if (isset($_GET['action']))
{
	$action = $_GET["action"];
}
else {
	$action = "readAll";
}
// Appel de la méthode statique $action de ControllerVoiture
ControllerCompteRendu::$action();

?>