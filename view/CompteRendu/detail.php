<?php
	htmlspecialchars($c->afficher());
	echo ' <a href="index.php?action=delete&id_compteRendu=' . rawurlencode($c->getIdCompteRendu()) . '">X' . '</a>' ;
	echo ' <a href="index.php?action=update&id_compteRendu=' . rawurlencode($c->getIdCompteRendu()) . '">maj ' . '</a>' ;
?>