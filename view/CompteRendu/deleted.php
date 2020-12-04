<?php

echo "<p>Le compte rendu d'id : " . $id_compteRendu . " a bien été supprimé !</p>";
require File::build_path(array("view","CompteRendu","list.php"));
?>
