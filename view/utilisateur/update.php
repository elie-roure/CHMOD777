<form method="GET" action="index.php">
    <fieldset>
        <legend>Formulaire de création d'utilisateur :</legend>
        <div>
            <label for="login_id">Login</label> :
            <input type="text" name="login" id="login_id" value="<?php echo $u->getLogin()?>" <?php echo $login_option?>/>
        </div>
        <div>
            <label for="nom_id">Nom</label> :
            <input type="text" name="nom" id="nom_id" value="<?php echo $u->getNom()?>" required/>
        </div>
        <div>
            <label for="prenom_id">Prénom</label> :
            <input type="text" name="prenom" id="prenom_id" value="<?php echo $u->getPrenom()?>" required/>
        </div>
        <div>
            <label for="adr_id">Adresse</label> :
            <input type="text" name="adresse" id="adr_id" value="<?php echo $u->getAdresse()?>" required/>
        </div>
        <div>
            <label for="mail_id">Mail</label> :
            <input type="email" pattern="[a-zA-Z0-9._-]+@[a-z0-9.-]+.[a-z]{2-4}" name="mail" id="mail_id" value="<?php echo $u->getMail()?>" required/>
        </div>
        <div>
            <label for="tel_id">Téléphone</label> :
            <input type="text" name="tel" id="tel_id" value="<?php echo $u->getTel()?>" required/>
        </div>
        <div>
            <label for="mdp_id">Mot de passe</label> :
            <input type="password" name="mdp" id="mdp_id" required/>
        </div>
        <div>
            <label for="mdp_conf">Confirmer mot de passe</label> :
            <input type="password" name="mdpconf" id="mdp_conf" required/>
        </div>
        <div>
            <input type='hidden' name='controller' value="<?php echo static::$controller ?>">
            <input type='hidden' name="action" value="<?php echo $form_option ?>">
            <input type="submit" value="Envoyer" />
        </div>
    </fieldset>
</form>