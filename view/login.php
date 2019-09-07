<?php 
header('Content-type: text/html; charset=utf-8');
ini_set("display_errors",1);

// if (isset($_GET['user'])) {
// 	$userget = $_GET['user'];
// }

if($_GET){
	$user = $_GET['user'];
	$pass = $_GET['pass'];
}
if($user == $_GET['user']){
	
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>APS - BIOMETRIA</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">
  		<div class="row">
    		<div class="col">
    		</div>
		    <div class="col">
		    	<br><br><br><br><br>
		    	
		    	<form class="px-4 py-3" action="login.php" method="get">
	    			<div class="form-group">
	      				<label for="user">Usuário</label>
	      				<input type="text" class="form-control" id="user">
	    			</div>
	    			<div class="form-group">
	      				<label for="pass">Senha</label>
	      				<input type="password" class="form-control" id="pass">
	    			</div>
	    			<div class="form-check">
	      				<input type="checkbox" class="form-check-input" id="dropdownCheck">
	    			</div>

	    			<div class="custom-file">
						<input type="file" class="custom-file-input" id="img">
						<label class="custom-file-label" for="img">Selecione uma imagem</label>
					</div>
					<br><br><br>
	    			<button type="submit" class="btn btn-secondary">Entrar</button>
  				</form>
  				<div class="dropdown-divider"></div>
  				<a class="dropdown-item" href="#">Novo por aqui? Regitre-se.</a>
			</div>
		<div class="col">
		</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>