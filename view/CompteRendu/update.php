<form method="GET" action="index.php">
    <fieldset>
        <legend>Formulaire de création de Compte rendu :</legend>
        <p>
            <label for="id_compteRendu">Id Comtpte rendu</label> :
            <input type="number" value="<?php echo $_GET['id_compteRendu'] ?>" name="id_compteRendu" id="id_compteRendu" readonly/>
        </p>
        <p>
            <label for="id_spot">Spot</label> :
            <input type="number" placeholder="Ex : 13" name="id_spot" id="id_spot" required/>
        </p>
        <p>
            <label for="login">Login</label> :
            <input type="text" placeholder="Ex : 12" name="login" id="login" required/>
        </p>
        <p>
            <label for="date_">Date</label> :
            <input type="date" placeholder="Ex : 12" name="date_" id="date_" required/>
        </p>
        <p>
            <label for="duree_sessions">Durée session</label> :
            <input type="number" placeholder="Ex : 3h" name="duree_sessions" id="duree_sessions" required/>
        </p>
        <p>
            <label for="houle">Houle</label> :
            <input type="number" placeholder="Ex : 12" name="houle" id="houle" required/>
        </p>
        <p>
            <label for="meteo">Meteo</label> :
            <input type="text" placeholder="Ex : 12" name="meteo" id="meteo" required/>
        </p>
        <p>
            <label for="pollution">Pollution</label> :
            <input type="number" placeholder="Ex : 12" name="pollution" id="pollution" required/>
        </p>
        <p>
            <label for="txt_descriptif">Texte descriptif</label> :
            <input type="text" placeholder="Ex : c'est cool de faire du surf" name="txt_descriptif" id="txt_descriptif" required/>
        </p>
        <p>
            <input type='hidden' name='action' value='created'>
            <input type="submit" value="Envoyer" />
        </p>
    </fieldset>
</form>
