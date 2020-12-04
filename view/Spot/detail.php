<?php
	htmlspecialchars($s->afficher());
	echo ' <a href="index.php?action=delete&controller=spot&id_spot=' . rawurlencode($s->getIdSpot()) . '">X' . '</a>' ;
	echo ' <a href="index.php?action=update&controller=spot&id_spot=' . rawurlencode($s->getIdSpot()) . '">maj ' . '</a>' ;
?>