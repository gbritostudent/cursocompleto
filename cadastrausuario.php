<?php 
include "head.php";
include"nav.php";
include("messagecaduser.php");
?>

<div class="container">
	<div class="row">
		<div class="col s12 m12 l9 z-depth-3 white">
			<form action="dadosuser.php" method="POST">
				<img src="img\logomarca.jpg" class="responsive-img">
			<div class="row">
				<div class="input-field col s8">
				<label>Nome Completo</label><br>
				<input type="text" name="nome">
				</div>

				<div class="input-field col s4">
				<label>Cpf</label><br>
				<input type="text" name="cpf" data-length="11">
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
				<label data-error="wrong" for="login">Login</label><br>
				<input type="email" name="login" id="login" class="validate">
				</div>
			</div>
				<div class="row">
				<div class="input-field col s4">
				<label>Senha</label><br>
				<input type="password" name="senha">
				</div>

				<div class="input-field col s4">
				<label> Confirmar Senha</label><br>
				<input type="password" name="confirmasenha">
				</div>
				<div class="input-field col s4" >
				<p>
     			 <input name="papel" type="radio" id="test1" value="1" />
      			 <label for="test1">Administrador</label>
    			 </p>
			     <p>
			     <input name="papel" type="radio" id="test2"  value="2" />
			     <label for="test2">Técnico</label>
			     </p>
			     <p>
			     <input class="with-gap" name="papel" type="radio" id="test3" value="3"  />
			     <label for="test3">Cliente</label>
			     </p>
				 </div>
			    </div>
				<div class=" input-field">
					<button class="btn " type="submit" name="cadastro">Cadastar
    				<i class="material-icons right">send</i>
  					</button>
				<a class="btn   blue" href="gestaousuarios.php" name="action">listar
    			<i class="material-icons right">send</i>
  				</a>
  				</div>
  				<br>
				</form>
		</div>
	</div>
</div>
<?php include"footer.php" ?>
