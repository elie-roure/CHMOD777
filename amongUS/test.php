<?php
if (!isset($_COOKIE["TestCookie"])) {
    setcookie("TestCookie", 0, time()+3600);
}
setcookie("TestCookie", $_COOKIE["TestCookie"]+1, time()+3600);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="test.js">
        start();
    </script>
</head>


<body>



<h2 id="test">Bonjour et bienvenue, tu as éliminée

<span class="salutations">
    <script type="text/javascript">
        document.write(compteur); // ici j'appel ma variable "result" Mais sa na fonctionne pas
    </SCRIPT>
</span> personne</h2>




<img src="./img/rose.png" id="rose" onclick="tuerRose()">

<img src="./img/vert.png" id="vert" onclick="tuerVert()">
<img src="./img/violet.png" id="violet" onclick="tuerViolet()">
<img src="./img/blanc.png" id="blanc" onclick="tuerBlanc()">
<img src="./img/jaune.png" id="jaune" onclick="tuerJaune()">
<img src="./img/bleu.png" id="bleu" onclick="tuerBleu()">
<img src="./img/marron.png" id="marron" onclick="tuerMarron()">
<img src="./img/bleuLight.png" id="bleuClair" onclick="tuerBleuClair()">
<img src="./img/vertLight.jpg" id="vertClair" onclick="tuerVertClair()">

<p onclick="alert('tu as éliminé ' + calculerMort() +' personne')">afficher nombre de kill</p>



<a href="testbis.html">coucou</a>

<div id="bleu"></div>

</body>


</html>