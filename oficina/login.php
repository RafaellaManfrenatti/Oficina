<?php
    require_once 'head.php';   
	include_once 'conexão.php'; 
	
	session_start();
	ob_start();


  ?>

<?php

//echo "senha".password_hash(123, PASSWORD_DEFAULT); criptografia de senhas//

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(!empty($dados["btnlogin"]))
{var_dump($dados);

$sql = "SELECT matricula,nome, email, senha
FROM funcionario
WHERE email =:usuario
LIMIT 1";

$resultado= $conn->prepare($sql);
$resultado->bindParam(':usuario', $dados['usuario'], PDO::PARAM_STR);
$resultado->execute();

if(($resultado) AND ($resultado->rowCount() !=0)){
    $linha = $resultado->fetch(PDO::FETCH_ASSOC);
	var_dump($linha);
	
 if(password_verify($dados['senha'],$linha['senha']))
    {$_SESSION['nome']=$linha['nome'];

	header("Location: administrativo.php");	
}

 else{$_SESSION['msg']="Usuário ou senha inválido!";}
}

else{$_SESSION['msg']="Usuário ou senha inválido!";}
}

if(isset($_SESSION['msg'])){echo $_SESSION['msg']; unset($_SESSION['msg']);
}
?>

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Faça seu login</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form method="POST" action="">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"> Usuário</i></span>
						</div>
						<input type="text" class="form-control" placeholder="usuario@seuemail.com" name="usuario">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key">Senha</i></span>
						</div>
						<input type="password" class="form-control" placeholder="Digite sua senha aqui" name="senha">
					</div>
				
					<div class="form-group">
						<input type="submit" value="Cadastre-se" class="btn float-right ">
					</div>

					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn" name="btnlogin">
					</div>
				</form>

			</div>
			<div class="card-footer">
				
				<div class="d-flex justify-content-center links">
					<a href="#">Esqueceu a Senha?</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
   
  ?>
</body>





      <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
