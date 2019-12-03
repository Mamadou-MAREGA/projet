<?php include 'header.php'; ?>

	<div class="container">
	
		<form class="col-md-8 mx-auto" method="post" action="adminSignIn.php">
		  <div class="form-group col-md-6">
		    <label for="exampleInputEmail1">Email address</label>
		    <i class="far fa-envelope"></i>
		    <input type="email" name="email" class="form-control" id="adminEmail" aria-describedby="emailHelp" placeholder="Enter email">
		  </div>

		  <div class="form-group col-md-6">
		    <label for="exampleInputPassword1">Mot de pass</label>
		    <i class="fas fa-key"></i>
		    <input type="password" class="form-control" id="adminPassword" placeholder="Password" name="password" size="8">
		  </div>

		  <button type="submit" class="btn btn-primary" id="sub" name="formSubmit">Inscription</button>
		</form>

	</div>



<?php include 'footer.php'; ?>