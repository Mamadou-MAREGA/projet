<?php
session_start();
require_once 'connexion.php';
require_once 'panier.php'; 
$panier = new panier();
?>
<!DOCTYPE html>
<html lang="fr-fr" dir="ltr">

<head>
	<meta charset="utf-8">
	<title>e_commmerce</title>
	<!-- Meta Responsiv -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Lien Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- Mon Lien CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/myStyle.css">
	<link rel="icon" type="image/png" href="assets/img/logo.png" />
	<!-- Font-awesome -->
	<script src="https://kit.fontawesome.com/7ea283dd96.js" crossorigin="anonymous"></script>
	
</head>

<body>

	<header class="entete">
		<nav class="navbar navbar-expand-lg navbar-light">

			<div class="logo">
				<a href="index.php" >
					<img src="assets/img/logomoi-min1-min.jpg" alt="logo">
				</a>
			</div>

			<div class="ml-auto d-block d-md-flex">
				<form class="form-inline my-2 my-lg-0" action="search.php" method="post">
					<input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Search" name="search" required="">
					<button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="formSubmit">Rechercher
					</button>
				</form>

				<!-- <a class="navbar-brand" href="#">Navbar</a> -->

				<button class="navbar-toggler" type="button" data-toggle="collapse"data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Compte
								<i class="fas fa-user"></i>
							</a>

							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="user.php">Inscription</a>
								<a class="dropdown-item" href="connectUser.php">Connexion</a>
								<a class="dropdown-item" href="connectUser.php">Deconnexion</a>
							</div>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="#">Produits</a>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Catégories
							</a>

							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="processeuri3.php">Processeur i3</a>
								<a class="dropdown-item" href="processeuri5.php">Processeur i5</a>
								<a class="dropdown-item" href="processeuri7.php">Processeur i7</a>
							</div>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="panierForm.php">
								Panier
								<i class="fas fa-shopping-cart"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<main>

