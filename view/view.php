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
            <div><a href="#">Spots</a>
                <div class="submenu">
                    <div><a href="?action=readAll&controller=spot">Liste</a></div>
                    <div><a href="?action=create&controller=spot">Créateur</a></div>
                </div>
            </div>
            <div><a href="#">Comptes Rendus</a>
                <div class="submenu">
                    <div><a href="?action=readAll">Liste</a></div>
                    <div><a href="?action=create">Créateur</a></div>
                </div>
            </div>
            <div><a href="?action=readAll&controller=utilisateur">Utilisateurs</a></div>
            <div><a href="?action=create&controller=utilisateur">Inscription</a></div>
            <div><a href="?controller=apropos">A Propos</a></div>
            <div><a href="?controller=contact">Contact</a></div>
        </nav>
	</header>


    <main>
        <p>
            <?php
            $filepath = File::build_path(array("view", static::$controller, "$view.php"));
            require $filepath;
            ?>
        </p>
    </main>


	<footer>
        <p>
            © Site BioSurfers
        </p>
	</footer>
	</body>
</html>
