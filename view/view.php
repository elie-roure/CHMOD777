<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./css/cssindex.css">
		<title><?php echo "titre"; ?></title>
	</head>
	<body>
	<header>
        <nav>
            <div><a href="?JESAISPASCEQUEJEDOISECRIREICI">Spots</a></div>
            <div><a href="?JESAISPASCEQUEJEDOISECRIREICI">Comptes Rendus</a></div>
            <div><a href="?JESAISPASCEQUEJEDOISECRIREICI">A Propos</a></div>
            <div><a href="?JESAISPASCEQUEJEDOISECRIREICI">Contact</a></div>
        </nav>
	</header>

	<?php
        $filepath = File::build_path(array("view", $controller, "$view.php"));
        require $filepath;
	?>

	<footer>
		<p style="border: 1px solid black;text-align:right;padding-right:1em;">
			Site BioSurfers
		</p>
	</footer>

	</body>
</html>
