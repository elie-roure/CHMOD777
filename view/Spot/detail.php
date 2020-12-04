<div>
	<?php

		echo '    <div>';
		echo '        <div>';

		echo '            <p>';
		echo '              Spot n° ' . htmlspecialchars($s->getIdSpot());
		echo '            </p>';

        echo '            <p>';
        echo '              Nom : ' . htmlspecialchars($s->getNom());
        echo '            </p>';

        echo '            <p>';
        echo '              Commune : ' . htmlspecialchars($s->getCommune());
        echo '            </p>';

		echo '            <p>';
        echo '              <a href="index.php?action=delete&controller=spot&id_spot=' . rawurlencode($s->getIdSpot()) . '">X' . '</a>' ;
        echo '              <a href="index.php?action=update&controller=spot&id_spot=' . rawurlencode($s->getIdSpot()) . '">maj ' . '</a>' ;
        echo '            </p>';


		echo '    </div>';
		echo '</div>';
	?>
</div>

