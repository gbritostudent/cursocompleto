<?php 

#sessão
session_start();


//requisitando a conexão com o banco
require_once 'dbconect.php';

//verificando se alguém cicou no botão cadastrar
if(isset($_POST['cadastro'])):

//variáveis que recebem os dados do usuários
$nomecompleto=mysqli_escape_string($connect, $_POST['nome']);
$cpf=mysqli_escape_string($connect, $_POST['cpf']);
$login=mysqli_escape_string($connect, $_POST['login']);
$senha=mysqli_escape_string($connect, $_POST['senha']);
$papel=mysqli_escape_string($connect, $_POST['papel']);

//comando de inserção dos dados nas respectivas tabelas 
//variavel sql grava uma string com o comando insert

$sql = "INSERT INTO usuario (nome, cpf, login, senha, papel_idpapel)
VALUES ('$nomecompleto', '$cpf', '$login','$senha' ,'$papel')";

//trecho de codigo testa se o insert funcionou
if (mysqli_query($connect, $sql)) {
	
	header("Location: gestaousuarios.php");
    
		$_SESSION['mensagem']='Usuário castrado com Sucesso !';
} else {
    echo "Error ao cadastrar usuário , Contate o administrador do site: " . $sql . "<br>" . mysqli_error($connect);
    header("Location: cadastrausuario.php");
		$_SESSION['mensagem']='Erro ao efetuar cadastro, Verifique os Campos!';


		echo $_SESSION['mensagem']	;
}

endif;

mysqli_close($connect);
	
?>