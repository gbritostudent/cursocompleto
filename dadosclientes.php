<?php 

#sessão
session_start();


//requisitando a conexão com o banco
require_once 'dbconect.php';

//verificando se alguém cicou no botão cadastrar
if(isset($_POST['cadastro'])):

//variáveis que recebem os dados do usuários
$razao=mysqli_escape_string($connect, $_POST['razao']);
$cnpj=mysqli_escape_string($connect, $_POST['cnpj']);
$ie=mysqli_escape_string($connect, $_POST['ie']);
$email=mysqli_escape_string($connect, $_POST['email']);
$telefone=mysqli_escape_string($connect, $_POST['fone']);

//comando de inserção dos dados nas respectivas tabelas 
//variavel sql grava uma string com o comando insert

$sql = "INSERT INTO usuario (razaocial, cnpj, incisaoestadual, email, telefone)
VALUES ('$razao', '$cnpj', '$ie','$email' ,'$telefone')";

//trecho de codigo testa se o insert funcionou
if (mysqli_query($connect, $sql)) {
	
	header("Location: gestaoclientes.php");
    
		$_SESSION['mensagem']='Cliente  castrado com Sucesso !';
} else {
    echo "Error ao cadastrar Cliente , Contate o administrador do site: " . $sql . "<br>" . mysqli_error($connect);
    header("Location: cadastracliente.php");
		$_SESSION['mensagem']='Erro ao efetuar cadastro, Verifique os Campos!';


		echo $_SESSION['mensagem']	;
}

endif;

mysqli_close($connect);
	
?>