<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Desafio</title>
		<link rel="stylesheet" href="estilo.css">
	</head>


	<body>

		<div class="container">

			<div class="borda">

				<form action="gravarIndex.php" method="post">
							
							<h2>Login</h2>
							<hr>
							<label >Seu e-mail</label></br>
							<input type="text" id="email" name="email" value="digite seu email"></br>

							<label >Sua senha</label></br>
							<input type="password" id="senha" name="senha" value="digite sua senha"></br>

							<input  type="radio" name="logado" >
							<label>Manter-me logado</label></br>
						
							<input type="submit" value="Login"></br>
							
							<div  >	
							<p>Ainda não tem conta ? <a href="controle.php">Cadastre-se</a></p>
							</div>
  				</form>
				  
							
			</div>

		</div>	
	</body>
</html>