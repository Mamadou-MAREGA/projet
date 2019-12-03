<?php include 'header.php';  ?>
	
	<h1 class="text-center">Formulaire de contact</h1>
	<div class="container">

		<form class="md-6 mx-auto">

		  <div class="form-group col-md-6">
		    <input type="text" class="form-control" id="contactName" aria-describedby="productName" placeholder="Nom" required="champ obligatoire">
		  </div>

		  <div class="form-group col-md-6">
		    <input type="text" class="form-control" id="contactPrenom" aria-describedby="" placeholder="Prénom" required="champ obligatoire">
		  </div>

		  <div class="form-group col-md-6">
		    <input type="text" class="form-control" id="contactEmail" aria-describedby="" placeholder="email">
		  </div>

		  <div class="form-group col-md-6">
			    <label for="">Message</label>
			    <textarea class="form-control" id="message" required="champ obligatoire">
			    	
			    </textarea>
		  </div>
		  <button type="submit" class="btn btn-success my-4" id="">Envoyer</button>
		</form>
	</div>
<?php include 'footer.php'; ?>