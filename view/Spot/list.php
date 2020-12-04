<?php
foreach ($tab_s as $v){

	echo '    <div>';
	echo '        <div>';

	echo '            <p>';
	echo '              Spot d\'id ' . htmlspecialchars($v->getIdSpot()) . '  <a href="index.php?action=delete&controller=spot&id_spot=' . rawurlencode($v->getIdSpot()) . '">X</a>' . ' <a href="index.php?action=update&controller=spot&id_spot=' . rawurlencode($v->getIdSpot()) . '">maj</a>';
	echo '            </p>';

	echo '              <a href="index.php?action=read&controller=spot&id_spot=' . rawurlencode($v->getIdSpot()). '">En savoir plus</a>';

	echo '</div>';
	echo '</div>';

}
?>
