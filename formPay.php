<?php include 'header.php'; ?>

	<div class="container">
		<form class="col-md-8 mx-auto">
		  <div class="form-group col-md-6">
		    <label for="exampleInputEmail1">Numéro de Carte</label>
		    <i class="fab fa-cc-visa"></i>
		    <i class="fab fa-cc-paypal"></i>
		    <i class="fab fa-cc-mastercard"></i>
		    <input type="number" class="form-control" id="cartNumber" aria-describedby="cartNumber" placeholder="Numéro de Carte">
		  </div>

		  <div class="form-group col-md-6">
		    <label for="">Date de validité</label>
		    <i class="far fa-calendar-alt"></i>
		    <input type="date" class="form-control" id="cartValidity" placeholder="Date de validité">
		  </div>

		  <div class="form-group col-md-6">
		    <label for="">Cryptogramme</label>
		    <input type="number" class="form-control" id="cartCrypto" placeholder="Cryptogramme">
		  </div>

		  <button type="submit" class="btn btn-primary" id="payer">Payer</button>
		</form>
	</div>	





<?php include 'footer.php'; ?>