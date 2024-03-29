<!-- About -->
<div class="pb-2">
	<h1 class="title title--h1 first-title title__separate">Contact</h1>
</div>

<h2 class="title title--h3">Formulaire de contact</h2>

<form method="post">
	<div class="row">
		<div class="form-group col-12 col-md-4">
			<i class="font-icon"><i class="fa-solid fa-user"></i></i>
			<input type="text" class="input input__icon form-control" id="nomContact" name="nomContact" placeholder="Nom" required="required" autocomplete="on" oninvalid="setCustomValidity('Remplissez le champ')" onkeyup="setCustomValidity('')">
			<div class="help-block with-errors"></div>
		</div>
		<div class="form-group col-12 col-md-4">
			<i class="font-icon"><i class="fa-solid fa-user"></i></i>
			<input type="text" class="input input__icon form-control" id="prenomContact" name="prenomContact" placeholder="Prénom" required="required" autocomplete="on" oninvalid="setCustomValidity('Remplissez le champ')" onkeyup="setCustomValidity('')">
			<div class="help-block with-errors"></div>
		</div>
		<div class="form-group col-12 col-md-4">
			<i class="font-icon"><i class="fa-solid fa-envelope"></i></i>
			<input type="email" class="input input__icon form-control" id="emailContact" name="emailContact" placeholder="Adresse e-mail" required="required" autocomplete="on" oninvalid="setCustomValidity('L\'e-mail est incorrect')" onkeyup="setCustomValidity('')">
			<div class="help-block with-errors"></div>
		</div>
		<div class="form-group col-12 col-md-12">
			<textarea class="textarea form-control" id="messageContact" name="messageContact" placeholder="Votre message" rows="4" required="required" oninvalid="setCustomValidity('Remplissez le champ')" onkeyup="setCustomValidity('')"></textarea>
			<div class="help-block with-errors"></div>
		</div>
	</div>
	<div class="row">
		<div class="col-12 col-md-6 order-2 order-md-1 text-center text-md-left">
			<div id="validator-contact" class="hidden"></div>
			Vérifiez votre E-Mail, on ne sait jamais ^^
		</div>
		<div class="col-12 col-md-6 order-1 order-md-2 text-right">
			<button name="btn_contact" type="submit" class="btn" style="margin-bottom: 5%;"><i class="font-icon"><i class="fa-solid fa-paper-plane"></i></i> Envoyer le message</button>
		</div>
	</div>
</form>
</div>