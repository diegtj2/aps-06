<?php 
header('Content-type: text/html; charset=utf-8');
ini_set("display_errors",1);

if(!empty($_POST)){
	$user = $_POST['user'];
	$pass = $_POST['pass'];
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>APS - BIO Cadastre-se</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				
			</div>
			<div class="col">
				<br><br><br><br><br>
				<form class="px-4 py-3" action="login.php" method="post">
	    			<div class="form-group">
	      				<input type="text" class="form-control" id="user" placeholder="Digite um username">
	    			</div>
	    			<div class="form-group">
	      				<input type="password" class="form-control" id="pass" placeholder="Digite uma senha">
	    			</div>
	    			<div class="form-group">
	      				<input type="password" class="form-control" id="pass" placeholder="Confirmar senha">
	    			</div>
	    			<div class="custom-file">
						<input type="file" class="custom-file-input" id="img">
						<label class="custom-file-label" for="img">Selecione uma imagem</label>
					</div>
	    			<br><br><br>
	    			<div class="dropdown-divider"></div>
	    			<a href="login.php" class="btn btn-secondary">Voltar</a>
	    			<button type="submit" class="btn btn-secondary" id="btnCad">Cadastrar</button>
  				</form>
			</div>
			<div class="col">
				
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>