<form method="GET" action="index.php">
    <fieldset>
        <legend>Connexion  :</legend>
        <div>
            <label for="login_id">Login</label> :
            <input type="text" name="login" id="login_id" required/>
        </div>
        <div>
            <label for="mdp_id">Mdp</label> :
            <input type="password" name="mdp" id="mdp_id" required/>
        </div>

        <input type="hidden" name="controller" value="utilisateur">
        <input type="hidden" name="action" value="connected">
        <input type="submit" value="Envoyer" />
    </fieldset>
</form>