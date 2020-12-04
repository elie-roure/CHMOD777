<?php
require_once File::build_path(array('model', 'ModelUtilisateur.php'));

class ControllerUtilisateur {
    protected static $controller = 'utilisateur';

    public static function readAll() {
        $tab_u = ModelUtilisateur::getAllUtilisateur();
        $pagetitle = "Liste des utilisateurs";
        $view = 'list';
        require File::build_path(array('view', 'view.php'));
    }

    public static function error() {
        $pagetitle = "Erreur user";
        $view = "error";
        require File::build_path(array('view', 'view.php'));
    }

    public static function read() {
        $user = ModelUtilisateur::getUtilisateurByLogin($_GET['login']);    // Récupère l'utilisateur

        if(!$user) {    // S'il n'existe pas
            ControllerUtilisateur::error();
        }
        else {
            $pagetitle = "Détails";
            $view = "details";
            require File::build_path(array('view', 'view.php'));
        }
    }


    public static function update() {
        $form_option = 'updated';
        $login_option = 'readonly';
        $u = ModelUtilisateur::getUtilisateurByLogin($_GET['login']);
        $view = 'update';
        $pagetitle = 'Modifier un utilisateur';
        require File::build_path(array('view', 'view.php'));
    }

    public static function updated() {

        if($_GET['mdp'] != $_GET['mdpconf']) {
            echo 'Confirmation du mdp échouée';
            $user = ModelUtilisateur::getUtilisateurByLogin($_GET['login']);
            $view = 'update';
            $pagetitle = 'Modifier un utilisateur';
            $form_option = 'updated';
            $login_option = 'readonly';
            require File::build_path(array('view', 'view.php'));
        }
        else {
            $u = ModelUtilisateur::getUtilisateurByLogin($_GET['login']);
            if($u->update($_GET)) {
                ControllerUtilisateur::error();
            }
            else {
                $view = 'updated';
                $pagetitle = 'Utilisateur modifié';
                $tab_u = ModelUtilisateur::getAllUtilisateur();
                require File::build_path(array('view', 'view.php'));
            }
        }
    }

}
?>