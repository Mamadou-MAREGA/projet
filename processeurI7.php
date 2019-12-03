<?php include 'header.php'; ?>

<?php require_once 'connexion.php';?>

	<div class="container">

		<div class="row">

	    	<?php
		    	$req = $pdo->prepare("SELECT * FROM produit WHERE categorie ='processeuri7'"); 
		    	$req->execute();
				$res = $req->fetchAll();
		    ?>
		    <?php foreach ($res as $produit): ?>

		    	<div class="col-12 col-md-6 col-lg-4 my-4">
			    	<div class="card h-100">
			    		<a href="panier.php">
			    			<img class="img-fluid" src="image/<?php echo $produit->photo;?>">
			    		</a>
			    		<p><?php echo $produit->nom; ?></p>
			    		<?php echo $produit->marque ; ?>
			    		<p><?php echo $produit->categorie; ?></p>
			    		<p class="price"><?php echo number_format($produit->prix,2, ',', ' '); ?>€</p>
			    		<p><?php echo $produit->designation; ?></p>
			    		<a href="panier.php">
			    			<button>Ajouter</button>
			    		</a>
			    	</div>
		    	</div>
		    			
		    <?php endforeach ?>

		</div><!-- Fin de la  class row -->
	</div> 


<?php include 'footer.php'; ?>