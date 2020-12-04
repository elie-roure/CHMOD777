<div>
	<?php

		echo '    <div class="cadre">';
		echo '        <div>';

		echo '            <p>';
		echo '              Compte rendu n° ' . htmlspecialchars($v->getIdCompteRendu());
		echo '            </p>';

		echo '            <p>';
		echo '  <a href="index.php?action=delete&id_compteRendu=' . rawurlencode($v->getIdCompteRendu()) . '">X</a>' . ' <a href="index.php?action=update&id_compteRendu=' . rawurlencode($v->getIdCompteRendu()) . '">maj</a>';
		echo '            </p>';

		echo '              <a href="index.php?action=read&id_compteRendu=' . rawurlencode($v->getIdCompteRendu()). '">En savoir plus</a>';

		echo '</div>';
		echo '</div>';
		htmlspecialchars($s->afficher());
		echo ' <a href="index.php?action=delete&controller=spot&id_spot=' . rawurlencode($s->getIdSpot()) . '">X' . '</a>' ;
		echo ' <a href="index.php?action=update&controller=spot&id_spot=' . rawurlencode($s->getIdSpot()) . '">maj ' . '</a>' ;
	?>
</div>

<div class="surcadrage">
	<?php
	foreach ($tab_c as $v){

		echo '    <div class="cadre">';
		echo '        <div>';

		echo '            <p>';
		echo '              Compte rendu n° ' . htmlspecialchars($v->getIdCompteRendu());
		echo '            </p>';

		echo '            <p>';
		echo '  <a href="index.php?action=delete&id_compteRendu=' . rawurlencode($v->getIdCompteRendu()) . '">X</a>' . ' <a href="index.php?action=update&id_compteRendu=' . rawurlencode($v->getIdCompteRendu()) . '">maj</a>';
		echo '            </p>';

		echo '              <a href="index.php?action=read&id_compteRendu=' . rawurlencode($v->getIdCompteRendu()). '">En savoir plus</a>';

		echo '</div>';
		echo '</div>';

	}
	?>
</div>
