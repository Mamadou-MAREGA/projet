<?php 
session_start();
	
	require_once 'connexion.php';

	$prenom = htmlspecialchars($_POST['prenom']);
	$nom = htmlspecialchars($_POST['nom']);
	$adress = htmlspecialchars($_POST['adress']);
	$adress2 = htmlspecialchars($_POST['adress2']);
	$email = htmlspecialchars($_POST['email']);
	$phone = htmlspecialchars($_POST['phone']);
	$password = $_POST['password'];
	$password1 = $_POST['password1'];
	$ville = htmlspecialchars($_POST['ville']);
	$pays = htmlspecialchars($_POST['pays']);
	$codep =htmlspecialchars( $_POST['codep']);

	//Vérification avant l'envoie du formulaire

	if (isset($_POST['envoyer'])) {
		
		if(!empty($prenom) AND !empty($nom) AND !empty($adress) AND !empty($adress2) AND !empty($email) AND !empty($phone) AND !empty($password) AND !empty($password1) AND !empty($ville) AND !empty($pays) AND !empty($codep)){

			if (filter_var($email,FILTER_VALIDATE_EMAIL)) {

				if($password == $password1){

					//Requete pour tester si l'email existe deja

					$req = $pdo->prepare("SELECT * FROM client WHERE mail = ?");
					$req->execute([$email]);
					$res = $req->fetch();

					//On teste la condition sur les lignes pour voir si l'email existe
					if($res){

						$erreurs = "Oups cet email existe déja";
					}else{

						//Dans le cas ou l'email n'existe pas

						$securePass = password_hash($password, PASSWORD_BCRYPT);
						$securePass1 = password_hash($password1, PASSWORD_BCRYPT);

						//Insertion dans la base de données

						$sql = $pdo->exec("INSERT INTO client (prenom,nom,adress,adress2,mail,tel,pass,pass1,ville,pays,codep) VALUES ('$prenom','$nom','$adress','$adress2','$email',$phone,'$securePass','$securePass1','$ville','$pays',$codep)");

						if($sql) {
							
							$erreurs = " Inscription réussie ";	
						}else{

							$erreurs = "Erreur lors de l'inscription";
						}

						header('Location :index.php');
					}

				}else{
					$erreurs = "Les mots de pass ne correspondent pas  ";
				}
				
			}else{
				$erreurs = "Mail invalide";
			}
		}else{

			$erreurs ="Les champs ne doivent pas être vide !!!";
		}
		if($erreurs){
			echo "<h1>".$erreurs."</h1>";
		}
	}

?>