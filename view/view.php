<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?php echo "titre"; ?></title>
	</head>
	<body>
	<header>
		<li>
			<ul>
				<a href="?action=readAll">Compte Rendu</a>
			</ul>
			<ul>
				<a href="?action=readAll&controller=Utilisateur">Utilisateur</a>
			</ul>
			<ul>
				<a href="??action=readAll&controller=Spot">Trajets</a>
			</ul>
		</li>
	</header>

	<?php
	$filepath = File::build_path(array("view", $controller, "$view.php"));
	require $filepath;
	?>

	<footer>
		<p style="border: 1px solid black;text-align:right;padding-right:1em;">
			Site BioSurf
		</p>
	</footer>

	</body>
</html>
