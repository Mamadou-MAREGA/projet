<?php
	require_once 'header.php';
	require_once 'connexion.php';
	//require_once 'fonctions.php';

	$json = array('error' => true);

	//var_dump($_GET);
	if(isset($_GET['idP'])){

		$prod_id = $_GET['idP'];

		$req = $pdo->prepare('SELECT * FROM produit WHERE idP = ?');
		$req->execute([$prod_id]);

		if($req->rowCount() >0){

			$prod = $req->fetch();
			//var_dump($prod);
			$panier->add($prod);
			$json['error'] = false;

			$json['total'] = $panier->total(); //Le total
			$json['count_item'] = $panier->count_item(); //Le nombre de produits

			$json['message']= 'Votre produit a été bien ajouté à votre panier';

		}else{

			$json['message']= "Ce produit n'existe pas";

		}

	}else{

		$json['message']= "Vous n'avez pas ajouter de produit à votre panier";
	}

	echo json_encode($json); // afficher le message d'erreur



	include 'footer.php';
?>