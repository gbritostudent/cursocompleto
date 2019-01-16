<?php 
#sessão exibindo mensagem de erro caso os campos estejam vazios em login.php !
session_start();
if(isset($_SESSION['erros'])):?>

<script type="text/javascript">
	//Trecho de Codigo js para usar um Toast do Materilize framework
  window.onload= function(){
  
  Materialize.toast('<?php echo $_SESSION['erros']; ?>', 4000 ,'rounded');

  }
</script>

<?php  
if(!isset($_SESSION['inexistente'])):?>

<script type="text/javascript">
	//Trecho de Codigo js para usar um Toast do Materilize framework
  window.onload= function(){
  
  Materialize.toast('<?php echo $_SESSION['inexistente']; ?>', 4000 ,'rounded');

  }
</script>

<?php
endif;
endif;
session_unset();
?>
