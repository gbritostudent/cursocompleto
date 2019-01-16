<?php 
#sessão exibindo mensagem de sucesso caso o cadastro seja completado !
session_start();
if(isset($_SESSION['mensagem'])):?>

<script type="text/javascript">
	//Trecho de Codigo js para usar um Toast do Materilize framework
  window.onload= function(){
  
  Materialize.toast('<?php echo $_SESSION['mensagem']; ?>', 4000 ,'rounded');

  }
</script>

<?php
endif;
session_unset();
?>
