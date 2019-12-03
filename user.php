<?php include'header.php'; ?>
	<h1 class="text-center">Inscription</h1>
<div class="container">

	<form method="post" action="userSignIn.php">

		<div class="form-row">

		    <div class="form-group col-md-6">
		      <label for="inputPrenom">Prénom</label>
		      <input type="text" class="form-control" id="inputPrenom" placeholder="Prénom" name="prenom">
		    </div>

		    <div class="form-group col-md-6">
		      <label for="inputNom">Nom</label>
		      <input type="text" class="form-control" id="inputNom" placeholder="Nom" name="nom">
		    </div>

		</div>

		<div class="form-group">
		    <label for="inputAddress">Addresse</label>
		    <input type="text" class="form-control" id="inputAddress" placeholder="Rue,Boulevard,Place ..." name="adress">
		</div>

		<div class="form-group">
		    <label for="inputAddress2">Address 2</label>
		    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartement, studio, Boite Postale" name="adress2">
		</div>

		<div class="form-row">
			<div class="form-group col-md-6">
			    <label for="inputEmail">Email</label>
			    <i class="far fa-envelope"></i>
			    <input type="email" class="form-control" id="inputEmail" placeholder="Example@gmail.com" name="email">
			</div>

			<div class="form-group col-md-6">
			    <label for="inputEmail">Téléphone</label>
			    <i class="fas fa-phone"></i>
			    <input type="text" class="form-control" id="inputPhone" placeholder="Phone" name="phone">
			</div>
		</div>

		<div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputPassword">Mot de pass</label>
		      <i class="fas fa-key"></i>
		      <input type="password" class="form-control" id="inputPassword" placeholder="Mot de pass" name="password">
		    </div>

		    <div class="form-group col-md-6">
		      <label for="inputPassword4">Confirmer mot de pass</label>
		      <i class="fas fa-key"></i>
		      <input type="password" class="form-control" id="inputPassword1" placeholder="Confirmer mot de pass" name="password1">
		    </div>
		</div>

		<div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputCity">Ville</label>
		      <i class="fas fa-city"></i>
		      <input type="text" class="form-control" id="inputVille" name="ville">
		 	</div>

		    <div class="form-group col-md-4">
		      <label for="inputState">Pays</label>
		      <input id="inputPays" class="form-control" name="pays">
		    </div>

		    <div class="form-group col-md-2">
		      <label for="inputZip">Code Postal</label>
		      <input type="text" class="form-control" id="inputCodep" name="codep" size="5">
		    </div>
		</div>
		<button type="submit" class="btn btn-success" id="sub" name="envoyer">S'inscrire</button>
	</form>
</div>

<?php include'footer.php'; ?>