<?php
require_once File::build_path(array('model', 'ModelUtilisateur.php'));

class ControllerUtilisateur {
    protected static $controller = 'user';

    public static function readAll() {
        $tab_u = ModelUtilisateur::getAllUtilisateur();
        $pagetitle = "Liste des utilisateurs";
        $view = 'list';
        require File::build_path(array('view', 'view.php'));
    }


}
?>