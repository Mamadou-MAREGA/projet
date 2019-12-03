<?php include 'header.php'; ?>
<?php require_once 'connexion.php'; ?>
<?php require_once 'panier.php'; ?>
<?php
	/*echo '<pre>';
	var_dump($_SESSION['panier']['idP']);
	echo '</pre>';*/
	if(isset($_GET['delPanier'])){
		$idP = intval($_GET['delPanier']);
		$panier->delPanier($idP);
	}
	?>
	<div class="container">

		<form method="post" action="panierForm.php">
			<table class="table">

				<thead class="rowtitle">
					<tr>
						<th scope="col"></th>
						<th scope="col">MARQUE</th>
						<th scope="col">CATEGORIE</th>
						<th scope="col">QUANTITE</th>
						<th scope="col">PRIX</th>
						<th scope="col">ACTION</th>
					</tr>
				</thead>

				<tbody>

					<?php
		  		//session_destroy();
					$ids = [];

					foreach ($panier->getItems() as $product) {

						$ids[] = $product['idP'];
					  	//var_dump($ids);

					}

		  		/*echo '<pre>';
		  		var_dump($panier->getItems());
		  		echo '</pre>';
				*/
		  		//echo "<br>";
		  		if(empty($ids)){

		  			$req = array();

		  		}else{

		  			$req = $pdo->query('SELECT * FROM produit WHERE idP IN ('.implode(",",$ids).')');
		  			//var_dump($req);
		  		}
		  		foreach ($req as $produit):

		  			?>

		  			<tr>
		  				<th class="panier-img"><img class="w-100" src="image/<?php echo $produit['photo'];?>"></th>
		  				<td><?php echo $produit['marque'] ; ?></td>
		  				<td><?php echo $produit['categorie']; ?></td>
		  				<td><input type="text" value="1" name="panier[qte][<?php echo $_SESSION['panier']['idP'];?>]" onchange="recalculer()"></td>
		  				<td><?php echo number_format($produit['prix'],2,',','') ; ?>€</td>
		  				

		  				<td class="tdLink">
		  					<a href="panierForm.php?delPanier=<?php echo $produit['idP'] ;?>" onclick='return confirmation();'>
		  						<i class="fas fa-trash"></i>
		  					</a>
		  				</td>
		  			</tr>
		  		<?php endforeach; ?>
		  	</tbody>
		  </table>

		  <input class="my-4" type="submit" name="" value="Recalculer">

		   <p align="right">Total :<?php echo number_format($panier->total(),2,',',''); ?>€</p>
		</form>
		
	</div>

	<?php include 'footer.php'; ?>