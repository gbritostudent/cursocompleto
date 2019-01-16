<?php  
//inserindo os trechos de codigos de cabecalho e menu html

		include("head.php");
		include("nav.php") ;
?>
<body class=" grey lighten-5">
	<div class="container">
	<div class="row">
		<div class="col s12 m8 ">
    <div class="card horizontal">
      	
      <div class="card-stacked">
        <div class="card-content">
          
							<img class="responsive-img" src="img\logomarca.jpg"><br>
							<label class="title-block">Nova Solicitação de Atendimento</label>
          
        </div>
        <div class="card-action">
 			<div class="input-field col s12">
			    <select class="Icons">
			    <option value="" disabled selected="" ="">Categoria do Atendimento</option>	
				<option value="Hospital Vera Cruz"  data-icon="img/boy.png">Help Desk</option>
				<option value="Seive Off Road"      data-icon="img/server.png" >Service Desk</option>
				<option value="Seive Off Road"      data-icon="img/infra.png" >Infraestrutura</option>
				</select>
			</div>
				
				
				<div class="input-field col  s12">
					<i class="material-icons prefix color-icon">edit-mode</i>
					<label for="descricao">Assunto do Chamado</label>
					<input type="text" class="materialize-textarea" name="descricao">
				</div>  

				<div class="input-field col  s12">
					<i class="material-icons prefix color-icon">edit-mode</i>
					<label for="descricao">Descreva com clareza os motivos da solicitação </label>
					<input type="text" class="materialize-textarea" name="descricao">
				</div> 

				<button class="btn waves-effect waves-light" type="submit" name="action">Abrir Chamado
    			</button>	
					</div>
   						 </div>
 							 </div>
								 </div> 
									 </div>
									</div>
<?php include("footer.php"); ?>