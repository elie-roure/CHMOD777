<form method="GET" action="index.php">
	<fieldset>
		<legend>Formulaire de création de Compte rendu :</legend>
		<p>
			<label for="compteRendu_id">Id Comtpte rendu</label> :
			<input type="text" placeholder="Ex : 12" name="compteRendu" id="compteRendu_id" required/>
		</p>
		<p>
			<label for="id_spot">Marque</label> :
			<input type="text" placeholder="Ex : 13" name="marque" id="id_spot" required/>
		</p>
		<p>
			<label for="couleur_id">Couleur</label> :
			<input type="text" placeholder="Ex : Bleu" name="couleur" id="couleur_id" required/>
		</p>
		<p>
			<input type='hidden' name='action' value='created'>
			<input type="submit" value="Envoyer" />
		</p>
	</fieldset>
</form>