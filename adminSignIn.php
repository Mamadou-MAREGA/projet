<?php
session_start();
	
	require_once 'connexion.php';

	$email = htmlspecialchars($_POST['email']);
	$pass = $_POST['password'];

	//Vérification avant l'envoie du formulaire
	if(isset($_POST['formSubmit'])){

		if(!empty($email) AND !empty($pass)){

			if(filter_var($email,FILTER_VALIDATE_EMAIL)){

				$tailleMax = strlen($pass);

				if($tailleMax<8){

					$erreurs = " Mot de pass court";

				}else{
					//Rêqute préparée pour tester si l'email existe ou pas
					$stmt = $pdo->prepare("SELECT * FROM admin WHERE email = ?");
					$stmt->execute([$email]);
					$req = $stmt->fetch();

					//Ici on teste la condition sur les lignes avec fetch()
					if($req){

						$erreurs = "Email existe";

					}else{
						//On rentre dans le else si l'email n'existe pas
						$securePass = password_hash($pass, PASSWORD_BCRYPT);
						//Insertion dans la bdd
						$query = $pdo->exec("INSERT INTO admin (email,pass) VALUES('$email','$securePass')");

						if($query){

							$erreurs = "admin signed successfully";
							
						}else{

							$erreurs = "Error in the query";
						}

						header('location:products.php');

						}
				}

			}else{

				$erreurs = "Ce mail est invalide";
			}	
		}else{
			$erreurs  = "Tous les champs doivent être renseignés";
		}	
		if(isset($erreurs)){
			echo "<h1>".$erreurs."</h1>";
		}
	}



?>