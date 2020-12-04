<div class="surcadrage">
	<?php
	foreach ($tab_c as $v){

		echo '    <div class="cadre">';
		echo '        <div>';

		echo '            <p>';
		echo '              Compte rendu d\'id ' . htmlspecialchars($v->getIdCompteRendu()) . '  <a href="index.php?action=delete&id_compteRendu=' . rawurlencode($v->getIdCompteRendu()) . '">X</a>' . ' <a href="index.php?action=update&id_compteRendu=' . rawurlencode($v->getIdCompteRendu()) . '">maj</a>';
		echo '            </p>';

		echo '              <a href="index.php?action=read&id_compteRendu=' . rawurlencode($v->getIdCompteRendu()). '">En savoir plus</a>';

		echo '</div>';
		echo '</div>';

	}
	?>
</div>
