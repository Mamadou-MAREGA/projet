<?php 
session_start();
		require_once 'connexion.php';

		if (isset($_POST['connectForm'])) {
			
			$email = htmlspecialchars($_POST['connectEmail']);
			$pass = $_POST['connectPassword'];
			$pass1 = $_POST['connectPassword1'];

			if(!empty($email) AND !empty($pass) AND !empty($pass1)){

				$result= $pdo->query("SELECT pass,pass1 FROM client");
				$result->execute();
				$user = $result->fetch(PDO::FETCH_ASSOC);
				/*print_r($user['pass']);
				print_r($user['pass1']);*/

				if($user){//On teste la requete
					
					if( password_verify($pass, $user['pass']) AND password_verify($pass1, $user['pass1']))
					{
						$req = $pdo->prepare("SELECT * FROM client WHERE mail = ? AND pass = ?");

						$req->execute(array($email,$user['pass']));

						$adminExist = $req->rowCount();

						if ($adminExist == 1) {

							$userInfo = $req->fetch(PDO::FETCH_ASSOC);
							$_SESSION['idCl'] = $userInfo['idCl'];
							$_SESSION['pass'] = $userInfo['pass'];
							$_SESSION['pass1'] = $userInfo['pass1'];
							header('Location: index.php?idCl='.$_SESSION['idCl']);
						}else{

							echo "<h1>Mauvais email ou mot de pass</h1>";
						}
					}else{

						echo "<h1>Password Incorrect</h1>";
					}
				//Fin de du if de la requete
				}else{

					echo "<h1>Erreur des identifiant lors de la connexion</h1>";
				}//Fin de else 
			//Fin du if empty()
			}else{

				echo "<h1>Tous les champs doivent être renseignés</h1>";
			}
		}//Fin du if du formulaire

	?>