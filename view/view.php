<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./css/cssindex.css">
		<title><?php echo "BioSurfers"; ?></title>
	</head>
	<body>
	<header>
        <nav>
            <div><a href="?action=readAll&controller=spot">Spots</a></div>
            <div><a href="?action=readAll&controller=compterendu">Comptes Rendus</a></div>
            <div><a href="?action=readAll&controller=utilisateur">Utilisateurs</a></div>
            <div><a href="?LIEN CLASSIQUE">A Propos</a></div>
            <div><a href="?LIEN CLASSIQUE">Contact</a></div>
        </nav>
	</header>

     <?php /*
    $filepath = File::build_path(array("view", $controller, "$view.php"));
    require $filepath;
    */?>

	<footer>
        <p style="border: 1px solid black;text-align:right;padding-right:1em;">
            Site BioSurfers
        </p>
	</footer>
	</body>
</html>
