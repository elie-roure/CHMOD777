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
            <div><a href="?action=readAll&controller=spot">Spots</a>
                <div class="submenu">
                    <div><a href="?action=readAll">Liste</a></div>
                    <div><a href="?action=create">Créateur</a></div>
                </div>
            </div>
            <div><a href="?action=readAll&controller=compterendu">Comptes Rendus</a>
                <div class="submenu">
                    <div><a href="?action=readAll">Liste</a></div>
                    <div><a href="?action=create">Créateur</a></div>
                </div>
            </div>
            <div><a href="?action=readAll&controller=utilisateur">Utilisateurs</a>
                <div class="submenu">
                    <div><a href="?action=readAll">Liste</a></div>
                    <div><a href="?action=create">Créateur</a></div>
                </div>
            </div>
            <div><a href="?action=apropos">A Propos</a></div>
            <div><a href="?action=contact">Contact</a></div>
        </nav>
	</header>


    <main>
        <p>
            <?php
            $filepath = File::build_path(array("view", static::$controller, "$view.php"));
            require $filepath;
            ?>
            BONJOUR JE SUIS LA
        </p>
    </main>


	<footer>
        <p style="border: 1px solid black;text-align:right;padding-right:1em;">
            Site BioSurfers
        </p>
	</footer>
	</body>
</html>
