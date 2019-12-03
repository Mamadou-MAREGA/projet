<?php include 'header.php'; ?>
<?php require_once 'connexion.php';?>

<div class="backImg">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="assets/img/mac.jpg" class="d-block w-100" alt="mac" class="img-fluid">
			</div>
			<div class="carousel-item">
				<img src="assets/img/img21.jpg" class="d-block w-100" alt="img21" class="img-fluid">
			</div>

			<div class="carousel-item">
				<img src="assets/img/img27.jpg" class="d-block w-100" alt="img27" class="img-fluid">
			</div>
		</div>

		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>

		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

<div class="container">

	<div class="row">

		<?php
		$req = $pdo->prepare('SELECT * FROM produit'); 
		$req->execute();

		$res = $req->fetchAll();
		   //var_dump($res);
		?>
		<?php foreach ($res as $produit): ?>

			<div class="col-12 col-md-6 col-lg-4 my-4">
				<div class="card h-100">
					<a class="add" href="addpanier.php?idP=<?php echo $produit['idP']; ?>">
						<img class="img-fluid" src="image/<?php echo $produit['photo'];?>">
					</a>
					<p><?php echo $produit['nom']; ?></p>
					<?php echo $produit['marque'] ; ?>
					<p><?php echo $produit['categorie']; ?></p>
					<p class="price"><?php echo number_format($produit['prix'],2, ',', ' '); ?>€</p>
					<p><?php echo $produit['designation']; ?></p>
					<a class="add" href="addpanier.php?idP=<?php echo $produit['idP']; ?>">
						<button>Ajouter</button>
					</a>
				</div>
			</div>

		<?php endforeach ?>

	</div><!-- Fin de la  class row -->
	
</div><!-- Fin de la class container -->
<?php include 'footer.php'; ?>