<?php 
session_start();
		require_once 'connexion.php';

		if (isset($_POST['formSubmit'])) {
			
			$email = htmlspecialchars($_POST['emailConnect']);
			$pass = $_POST['password'];

			if(!empty($email) AND !empty($pass)){

				$result= $pdo->query("SELECT pass FROM admin");
				$result->execute();
				$user = $result->fetch(PDO::FETCH_ASSOC);
				

				if($user){//On teste la requete
					
					if( password_verify($pass, $user['pass']))
					{
						$req = $pdo->prepare("SELECT * FROM admin WHERE email = ? AND pass = ?");

						$req->execute(array($email,$user['pass']));

						$adminExist = $req->rowCount();

						if ($adminExist == 1) {

							$adminInfo = $req->fetch(PDO::FETCH_ASSOC);
							$_SESSION['id'] = $adminInfo['id'];
							$_SESSION['pass'] = $adminInfo['pass'];
							header('Location: dashboard.php?id='.$_SESSION['id']);
						}else{

							echo "Mauvais email ou mot de pass";
						}
					}else{

						echo "Password Incorrect";
					}
				//Fin de du if de la requete
				}else{

					echo "Erreur des identifiant lors de la connexion";
				}//Fin de else 
			//Fin du if empty()
			}else{

				echo "Tous les champs doivent être renseignés";
			}
		}//Fin du if du formulaire

	?>