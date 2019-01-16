<?php 

require_once("dbconect.php");
session_start();

#verificando se algúem clicou no botão entrar!
if(isset($_POST['entrar'])):

# recebe os dados de usuário e senha digitados no formulario
$username=mysqli_escape_string($connect,$_POST['login']);
$password= mysqli_escape_string($connect, $_POST['senha']);

#verificando se as variaveis de usuário e senha foram alimentadas via POST
	if (empty($username) or empty($password) ):
	header("Location: login.php");
    # se estiver vazio o formulário exibir um alerta ao usuário
		$_SESSION['erros']='Campos Vazios Preencha por favor!';
#se os campos estiverem preenchidos corretamente  
		else:
			//realiza uma consulta ao banco e verifica se existe um login igual ao digitado
			$sql='SELECT login from usuário WHERE login= "$username"';
			$resultado = mysqli_query($connect, $sql);

			if (mysqli_num_rows($resultado > 0)):

			// Se existir  seleciona o registro do banco onde onde usuario e senha sejam iguais aos informados ..
			$sql = "SELECT * FROM usuario where  login = '$username' AND senha ='$password'" ;
			$resultado = mysqli_query($connect, $sql);

				if (mysqli_num_rows($resultado) ==1):

				$dados= mysqli_fetch_array($resultado);
				$_SESSION['logado']= true;
				$_SESSION['id_usuario'] = $dados['id'];
				header("Location: home.php");

			else : 
				header("Location: login.php");
						$_SESSION['incorreto']='Usuário e ou Senhas Invalidos!';
				
		endif;
			else:
				header("Location: login.php");
					$_SESSION['inexistente']='Usuário não cadastrado!';

		endif;
endif;
endif;

mysqli_close($connect);
	
?>


 