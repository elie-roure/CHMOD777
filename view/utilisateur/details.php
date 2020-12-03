<?php
htmlspecialchars($user->afficher());

echo '<br><p> <a href="index.php?action=delete&controller=utilisateur&login=' . rawurlencode($user->getLogin()) . '"> Supprimer </a> </p>';
echo '<p> <a href="index.php?action=update&controller=utilisateur&login=' . rawurlencode($user->getLogin()) . '"> Modifier </a> </p>';

?>