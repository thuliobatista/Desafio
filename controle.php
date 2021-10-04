<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cadastro</title>
        <link rel="stylesheet" href="estilo.css">
	</head>


	<body>
         <div class="container">

                        

				<div class="borda" >
                         
                        <p>Registrar um novo Usuário</p>   
					<form action="gravarcontrole.php" method="post">

                        
                        <input class="formulario" type="text" name="nome" value="Nome"></br>
                        <input class="formulario" type="text" name="sobrenome" value="Sobrenome"></br>
                        <input class="formulario" type="text" name="email" value="email"></br>
                        <input  class="formulario"type="password" name="password" value="password"></br>
                        <input class="formulario" type="password" name="repassword" value="Retype password"></br>
                        
                        <p><input type="radio" name="termo" > <label>Eu concordo com os termos</label> <input type="submit" value="Registrar"></p>

                        <a class="link-modificado" href="index.php">Eu ja sou Cadastrado</a>
					</form>
					
				</div>
      </div>	
			

	</body>
</html>