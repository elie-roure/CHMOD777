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
                <div class="submenu">
                    <div><a href="?action=readAll">Liste</a></div>
                    <div><a href="?action=create">Créateur</a></div>
                </div>
            <div><a href="?action=readAll&controller=compterendu">Comptes Rendus</a></div>
                <div class="submenu">
                    <div><a href="?action=readAll">Liste</a></div>
                    <div><a href="?action=create">Créateur</a></div>
                </div>
            <div><a href="?action=readAll&controller=utilisateur">Utilisateurs</a></div>
                <div class="submenu">
                    <div><a href="?action=readAll">Liste</a></div>
                    <div><a href="?action=create">Créateur</a></div>
                </div>
            <div><a href="./html/apropos.html">A Propos</a></div>
            <div><a href="./html/contact.html">Contact</a></div>
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
