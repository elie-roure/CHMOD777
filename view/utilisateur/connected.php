<?php
    echo "<p>Vous êtes connectés en tant que " . $_SESSION['login'] . "</p>";
    require  File::build_path(array('view', 'utilisateur', 'details.php'));
?>