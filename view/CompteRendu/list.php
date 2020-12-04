<div class="surcadrage">
	<?php

	foreach ($tab_c as $v){

		echo '    <div class="cadre">';
		echo '        <div>';
        echo ' <img src="./amongUS/img/blanc.png" id="blanc" onclick="tuerBlanc()" style="height: 10%; width: 10%";>' ;

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
