
<div>
	<?php

	echo '    <div>';
	echo '        <div>';

	echo '            <p>';
	echo '              Compte rendu n° ' . htmlspecialchars($c->getIdCompteRendu());
	echo '            </p>';

	echo '            <p>';
	echo '              Sur le Spot n° ' . htmlspecialchars($c->getIdSpot());
	echo '            </p>';

	echo '            <p>';
	echo '              De : ' . htmlspecialchars($c->getLogin());
	echo '            </p>';

	echo '            <p>';
	echo '              Date : ' . htmlspecialchars($c->getDate());
	echo '            </p>';

	echo '            <p>';
	echo '              Durée session : ' . htmlspecialchars($c->getDureeSessions());
	echo '            </p>';

	echo '            <p>';
	echo '              Puissance Houle : ' . htmlspecialchars($c->getHoule());
	echo '            </p>';

	echo '            <p>';
	echo '              Méteo : ' . htmlspecialchars($c->getMeteo());
	echo '            </p>';

	echo '            <p>';
	echo '              Echelle de population : ' . htmlspecialchars($c->getPollution());
	echo '            </p>';

	echo '            <p>';
	echo '              Descriptif détaillé : ' . htmlspecialchars($c->getTxtDescriptif());
	echo '            </p>';

	echo '            <p>';
	echo ' <a href="index.php?action=delete&controller=CompteRendu&id_compteRendu=' . rawurlencode($c->getIdCompteRendu()) . '">X' . '</a>' ;
	echo ' <a href="index.php?action=update&controller=CompteRendu&id_compteRendu=' . rawurlencode($c->getIdCompteRendu()) . '">maj ' . '</a>' ;
	echo '            </p>';


	echo '    </div>';
	echo '</div>';
	?>
</div>
