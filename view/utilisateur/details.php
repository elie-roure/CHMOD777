<?php
$user = ModelUtilisateur::getUtilisateurByLogin($_GET['login']);
echo "<div>htmlspecialchars('Vous êtes connectés en tant que ' . $user->$getLogin())</div>";
echo "<div>htmlspecialchars($user->getPrenom() . ' ' . $user->getNom())</div>";
echo "<div>htmlspecialchars($user->getAdresse())</div>";
echo "<div>htmlspecialchars($user->getMail())</div>";
echo "<div>htmlspecialchars($user->getTel())</div>";

echo '<br><p> <a href="index.php?action=delete&controller=utilisateur&login=' . rawurlencode($user->getLogin()) . '"> Supprimer </a> </p>';
echo '<p> <a href="index.php?action=update&controller=utilisateur&login=' . rawurlencode($user->getLogin()) . '"> Modifier </a> </p>';

?>