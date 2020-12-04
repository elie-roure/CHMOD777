<div class="surcadrage">
	<?php
	foreach ($tab_s as $v){

		echo '    <div class="cadre">';
		echo '        <div>';

		echo '            <p>';
		echo '              Spot d\'id ' . htmlspecialchars($v->getIdspot()) . '  <a href="index.php?action=delete&controller=spot&id_spot=' . rawurlencode($v->getIdspot()) . '">X</a>' . ' <a href="index.php?action=update&controller=spot&id_spot=' . rawurlencode($v->getIdspot()) . '">maj</a>';
		echo '            </p>';

		echo '            <p>';
		echo htmlspecialchars($v->getNom()) . '  <a href="index.php?action=delete&controller=spot&id_spot=' . rawurlencode($v->getIdspot()) . '">X</a>' . ' <a href="index.php?action=update&controller=spot&id_spot=' . rawurlencode($v->getIdspot()) . '">maj</a>';
		echo '            </p>';

		echo '              <a href="index.php?action=read&controller=spot&id_spot=' . rawurlencode($v->getIdspot()). '">En savoir plus</a>';

		echo '</div>';
		echo '</div>';

	}
	?>
</div>