<?php

require_once File::build_path(array("controller","ControllerVoiture.php"));
require_once File::build_path(array("controller","ControllerUtilisateur.php"));

// On recupere le controller passée dans l'URL

$controller_default = "CompteRendu";


if (isset($_GET['controller']))
{
	$controller = $_GET['controller'];
	$controller_class = "Controller" . ucfirst($controller);
}
else {
	$controller = $controller_default;
	$controller_class = "Controller" . ucfirst($controller);
}

if (class_exists($controller_class))
{
	// On recupère l'action passée dans l'URL
	if (isset($_GET['action']))
	{
		if ((in_array($_GET['action'],get_class_methods($controller_class))))
		{
			$action = $_GET["action"];
		}
		else
		{
			$action = "error";
		}
	}
	else
	{
		$action = "readAll";
	}
}
else
{
	$controller_class = "ControllerCompteRendu";
	$action = "error";
}

// Appel de la méthode statique $action de ControllerVoiture
$controller_class::$action();

?>