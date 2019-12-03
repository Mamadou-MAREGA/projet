<?php 
session_start();
	
	include 'connexion.php';

	$productName = htmlspecialchars($_POST['productName']);
	$productMark = htmlspecialchars($_POST['productMark']);
	$productCategory = htmlspecialchars( $_POST['productCategory']);
	$productPrice = htmlspecialchars($_POST['productPrice']);
	$productDescribe = htmlspecialchars($_POST['productDescribe']);

	if (isset($_POST['formSubmit'])){
			
		if (!empty($productName) AND !empty($productMark) AND !empty($productCategory) AND !empty($productPrice) AND !empty($productDescribe)) {
			
			if (!empty($_FILES['avatar']['name'])) {

				$file_name = $_FILES['avatar']['name'];

				$file_extension = strrchr($file_name, ".");

				$file_tmp_name = $_FILES['avatar']['tmp_name'];

				$extension_autorisees = array('.jpg', '.JPG', '.gif', '.GIF', '.png', '.PNG', '.jpeg', '.JPEG');

				$file_dest = 'image/'.$file_name;

				//Vérifier si la taille max n'est pas supérieur à 5Mo
				$tailleMax =  2 * 1024 * 1024;

				if ($_FILES['avatar']['size'] <= $tailleMax) {
					
					if(in_array($file_extension, $extension_autorisees)){

						if (move_uploaded_file($file_tmp_name, $file_dest)) {
							
							$req = $pdo->prepare("INSERT INTO produit (photo,nom,marque,categorie,prix,designation,photo_url) VALUES(?,?,?,?,?,?,?)");

							$req->execute(array($file_name,$productName,$productMark,$productCategory,$productPrice,$productDescribe,$file_dest));

							echo "Add success";

						}else{

							echo "Erreur durant l'importation de la photo";
						}

					}else{

						echo "Votre photo de profil doit être au format jpg ou jpeg ou png ou gif";
					}
				}else{

					echo "La photo ne doit pas dépasser 2Mo";
				}
			}
		}else{
			
			echo "Tous les champs doivent être renseignés";
		}
		
	}
	
?>