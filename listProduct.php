<?php include 'header.php'; ?>
<?php include 'connexion.php'; ?>
<?php
	
	if(isset($_GET['delete'])){
		$id = intval($_GET['delete']);
		//var_dump($id);

		$sql= $pdo->prepare('DELETE FROM produit WHERE idP = ?');
		$sql->execute([$id]);
	}  
?>
	<div class="container">
		<h1 class="text-center">Liste de tous les produits</h1>

		<div class="panel-info my-4">
			<div class="panel-body">
				
				<?php

					$sql = 'SELECT * FROM produit';
					$query = $pdo->query($sql);  
				?>
				<table class="table table-bordered">
					<tr>
						<td>Identifiant du produit</td>
						<td>Image du produit</td>
						<td>Nom du produit</td>
						<td>Marque</td>
						<td>Catégorie</td>
						<td>Prix</td>
						<td>Désignation</td>
						<td>Action</td>
						<td>Action</td>
					</tr>

					<?php while($row = $query->fetch(PDO::FETCH_ASSOC)) : ?>	
						<tr>
							<td><?php echo $row['idP']; ?></td>
							<td class="panier-img">
								<img class="w-100" src="image/<?php echo $row['photo'];?>">
							</td>
							<td><?php echo $row['nom']; ?></td>
							<td><?php echo $row['marque'] ?></td>
							<td><?php echo $row['categorie']; ?></td>
							<td><?php echo $row['prix']; ?>€</td>
							<td><?php echo $row['designation']; ?></td>
							<td class="edit"><a href="edit.php?edit=<?php echo $row['idP']; ?>">Modifier</a></td>
							<td class="del"><a href="listProduct.php?delete=<?php echo $row['idP']; ?>" onclick='return confirmation();'>Supprimer</a></td>
						</tr>
					<?php endwhile; ?>

				</table>
			</div>
		</div>
	</div>
	<div class="my-4">
		
	</div>
<?php include 'footer.php'; ?>