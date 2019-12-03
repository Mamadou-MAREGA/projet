<?php include 'header.php'; ?>

	<div class="container">
		<form class="col-lg-8 mx-auto" method="post" action="product.php" enctype="multipart/form-data">

		  <div class="form-group col-md-6">
		    <label for="">Choisir</label>
		    <input type="file" class="form-control" id="productImg" accept="image/*" aria-describedby="productImg" name="avatar">
		  </div>

		  <div class="form-group col-md-6">
		    <label for="">Nom du produit</label>
		    <input type="text" class="form-control" id="productName" aria-describedby="productName" placeholder="Nom du produit" name="productName">
		  </div>

		  <div class="form-group col-md-6">
			    <label for="">Marque</label>
			    <input id="inputMark" class="form-control" name="productMark">
		  </div>

		  <div class="form-group col-md-6">
			    <label for="">Catégories</label>
				<input id="inputCategory" class="form-control" name="productCategory">
		  </div>

		  <div class="form-group col-md-6">
		    <label for="">Prix</label>
		    <i class="fas fa-euro-sign"></i>
		    <input type="number" class="form-control" id="productPrice" placeholder="Prix" value="" min="1" name="productPrice">
		  </div>

		  <div class="form-group col-md-6">
			    <label for="">Description</label>
			    <textarea class="form-control" id="productDescribe" name="productDescribe">
			    	
			    </textarea>
		  </div>
		  <button type="submit" class="btn btn-primary my-4" id="" name="formSubmit">Ajouter</button>
		</form>
	</div>

<?php include 'footer.php'; ?>