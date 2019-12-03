<?php include 'header.php'; ?>

<?php 


if (isset($_POST['edit'])) {

	$idP = intval($_POST['idP']);
	$productName = $_POST['productName'];
	$productMark = $_POST['productMark'];
	$productCategory = $_POST['productCategory'];
	$productPrice = $_POST['productPrice'];
	$productDescribe = $_POST['productDescribe'];

	$sql = 'UPDATE produit SET nom =:nom, marque =:marque, categorie =:categorie, prix =:prix, designation =:designation WHERE idP =:idP';

	$sql = $pdo->prepare($sql);
	
	$sql->execute(array(
		':nom' => $productName ,
		':marque' => $productMark,
		':categorie' => $productCategory,
		':prix' => $productPrice,
		':designation' => $productDescribe,
		':idP' => $idP
	));

	if ($sql) {

		echo "Success";
	}else{

		echo "Error";
	}
}


?>

<h1 class="text-center">Formulaire de modification des produits</h1>
<div class="container">

	<form class="col-lg-8 mx-auto" method="post" action="edit.php" enctype="multipart/form-data">
		<?php
		if (isset($_GET['edit'])) {
			$idP = intval($_GET['edit']);
				//var_dump($idP);
			$req = $pdo->prepare('SELECT * FROM produit WHERE idP = ?');
			$req->execute([$idP]);
			$row = $req->fetch(PDO::FETCH_ASSOC);   
				//var_dump($row);
		}
		?>
		<div class="form-group col-md-6">
			<!-- <label for="">Choisir</label> -->
			<input type="hidden" class="form-control" id="productImg" aria-describedby="productImg" name="idP" value="<?php echo $row['idP']; ?>">
		</div>

		<div class="form-group col-md-6">
			<!-- <label for="">Choisir</label> -->
			<input type="hidden" class="form-control" id="productImg" accept="image/*" aria-describedby="productImg" name="avatar" value="<?php echo $row['photo']; ?>">
		</div>

		<div class="form-group col-md-6">
			<label for="">Nom du produit</label>
			<input type="text" class="form-control" id="productName" aria-describedby="productName" placeholder="Nom du produit" name="productName" value="<?php echo $row['nom'] ; ?>">
		</div>

		<div class="form-group col-md-6">
			<label for="">Marque</label>
			<input id="inputMark" class="form-control" name="productMark" value="<?php echo $row['marque'] ;?>">
		</div>

		<div class="form-group col-md-6">
			<label for="">Catégories</label>
			<input id="inputCategory" class="form-control" name="productCategory" value="<?php echo $row['categorie']; ?>">
		</div>

		<div class="form-group col-md-6">
			<label for="">Prix</label>
			<i class="fas fa-euro-sign"></i>
			<input type="number" class="form-control" id="productPrice" placeholder="Prix"   name="productPrice" value="<?php echo $row['prix']; ?>"€>
		</div>

		<div class="form-group col-md-6">
			<label for="">Description</label>
			<input class="form-control" id="productDescribe" name="productDescribe" value="<?php echo $row['designation']; ?>">


		</div>
		<button type="submit" class="btn btn-success my-4" id="" name="edit">
			Modifier
		</button>
		<a href="listProduct.php">Retour vers la Liste</a>
	</form>
</div>

<?php include 'footer.php'; ?>