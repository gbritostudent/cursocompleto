<?php 
//conexão com o banco de dados
$servername="localhost";
$username="root";
$password="gbrit@";
$db_name="informa";

$connect = mysqli_connect($servername,$username,$password,$db_name);
mysqli_set_charset($connect,'utf8');
if (mysqli_connect_error()):
	echo "<b>Erro na conexão </b>".mysqli_connect_error();
	
endif;

?>