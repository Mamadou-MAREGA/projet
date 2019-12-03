<?php include 'header.php'; ?>
	
	<h1 class="text-center">Connexion</h1>
	<div class="container">
		
		<form method="post" action="userLogin.php">
		  <div class="form-group col-md-6">
		    <label for="exampleInputEmail1">Email address</label>
		    <i class="far fa-envelope"></i>
		    <input type="email" class="form-control" id="connectEmail" aria-describedby="emailHelp" placeholder="Enter email" name="connectEmail">
		  </div>

		  <div class="form-group col-md-6">
		    <label for="exampleInputPassword1">Password</label>
		    <i class="fas fa-key"></i>
		    <input type="password" class="form-control" id="connectPassword" placeholder="Password" name="connectPassword">
		  </div>

		  <div class="form-group col-md-6">
		    <label for="exampleInputPassword1">Confirmer votre mot de pass</label>
		    <i class="fas fa-key"></i>
		    <input type="password" class="form-control" id="connectPassword" placeholder="Password" name="connectPassword1">
		  </div>

		  <button type="submit" class="btn btn-success" id="" name="connectForm">Connecter</button>
		  <button type="submit" class="btn btn-primary" id="">Mot de pass oublié</button> <button type="submit" class="btn btn-primary" id=""><a href="user.php">Pas de compte</a></button>
		</form>
	</div>	





<?php include 'footer.php'; ?>