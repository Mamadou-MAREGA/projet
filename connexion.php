<?php 
	
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbb = "soutenance";

	try {

		$pdo = new PDO('mysql:host='.$host.';dbname='.$dbb, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
		
	} catch (Exception $e) {

		die('Erreur'.$e->getMessage());
		
	}

	global $pdo;

		
?>