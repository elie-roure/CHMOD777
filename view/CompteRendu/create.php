<form method="GET" action="index.php">
	<div>
		<legend>Formulaire de création de Compte rendu :</legend>
		<div>
			<label for="id_compteRendu">Identifiant du compte rendu <em>*</em> : </label>
			<input type="number" placeholder="Ex : 12" name="id_compteRendu" id="id_compteRendu" required/>
		</div>
		<div>
			<label for="id_spot">Spot <em>*</em> :</label>
			<input type="number" placeholder="Ex : 13" name="id_spot" id="id_spot" required/>
		</div>
		<div>
			<label for="login">Login <em>*</em> :</label>
			<input type="text" placeholder="Ex : 12" name="login" id="login" required/>
		</div>
        <div>
            <label for="date_">Date <em>*</em> :</label>
            <input type="date" placeholder="Ex : 12" name="date_" id="date_" required/>
        </div>
        <div>
            <label for="duree_sessions">Durée de la session <em>*</em> :</label>
            <input type="number" placeholder="Ex : 3h" name="duree_sessions" id="duree_sessions" required/>
        </div>
        <div>
            <label for="houle">Puissance de la houle <em>*</em> :</label>
            <select>
                <option value="" disabled selected>Choisissez...</option>
                <option value="tresfaible">Très faible</option>
                <option value="faible">Faible</option>
                <option value="normale">Normale</option>
                <option value="forte">Forte</option>
                <option value="tresforte">Très Forte</option> <!-- Serait-ce une puissance Divine ? Δ ? -->
            </select>
        </div>
        <div>
            <label for="meteo">Météo <em>*</em> :</label>
            <input type="text" placeholder="Ex : 12" name="meteo" id="meteo" required/>
        </div>
        <div>
            <label for="pollution">Niveau de pollution ? (de 0 à 9) <em>*</em> :</label>
            <input type="number" placeholder="Ex : 12" name="pollution" id="pollution" required pattern="[0-9]*"/>
        </div>
        <div>
            <label for="txt_descriptif">Texte descriptif <em>*</em> :</label>
            <input type="textarea" placeholder="Ecrivez votre message ici..." name="txt_descriptif" id="txt_descriptif" maxlength="10000" rows="5" cols="50" required/>
        </div>
        <p><em>*</em> Ce champ est requis.</p>
		<div>
			<input type='hidden' name='action' value='created'>
			<input type="submit" value="Envoyer" class="button" />
		</div>
	</div>
</form>