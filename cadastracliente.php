<?php 
include "head.php";
include"nav.php";
include("messagecaduser.php");
?>

<div class="container">
	<div class="row">
		<div class="col s12 m12 l9 z-depth-3 white">
			<form action="dadosclientes.php" method="POST">
				<img src="img\logomarca.jpg" class="responsive-img">
			<div class="row">
				<div class="input-field col s8">
				<label>Razão Social</label><br>
				<input type="text" name="razao">
				</div>

				<div class="input-field col s4">
				<label>CNPJ</label><br>
				<input type="text" name="cnpj" data-length="15">
				</div>
			</div>
			
				<div class="row">
				<div class="input-field col s6">
				<label>Inscrissão Estadual</label><br>
				<input type="text" name="ie">
				</div>
				<div class="input-field col s6">
				<label>Telefone</label><br>
				<input type="text" name="fone" data-length="15">
				</div>
				</div>
				<div class="row">
				<div class="input-field col s4 ">
				<label>Cep</label>
				<input type="text" name="cep" data-length="8">
				</div>

				<div class="input-field col s2">
				<a class="btn-floating  waves-effect waves-light"><i class="material-icons">search</i></a>
				</div>

				<div class="input-field col s6 ">
				<label>Cidade</label>
				<input type="text" name="cidade">
				</div>
				</div>

				<div class="row">
				<div class="input-field col s6 ">
				<label>Bairro</label>
				<input type="text" name="bairro">
				</div>

				<div class="input-field col s6 ">
				<label>Logradouro</label>
				<input type="text" name="logradouro">
				</div>
				</div>


				<div class=" row">
				<div class="input-field col s6">
				<label data-error="wrong" for="email">Email</label><br>
				<input type="email" name="email" id="login" class="validate">
				</div>
				

				 <input name="papel" type="radio" id="test1" value="1" />
      			 <label for="test1">Contrato tipo 1</label>
    			 </p>
			     <p>
			     <input name="papel" type="radio" id="test2"  value="2" />
			     <label for="test2">Contrato tipo 2</label>
			     </p>
			     <p>
			     <input class="with-gap" name="papel" type="radio" id="test3" value="3"  />
			     <label for="test3">contrato tipo 2	</label>
			     </p>
				 </div>
				
				
				<div class=" input-field">
					<button class="btn " type="submit" name="cadastro">Cadastar
    				<i class="material-icons right">send</i>
  					</button>
				<a class="btn   blue" href="#" name="action">listar
    			<i class="material-icons right">send</i>
  				</a>
  				</div>
  				<br>
				</form>
		</div>
	</div>
</div>
<?php include"footer.php" ?>
