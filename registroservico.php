<?php  
//inserindo os trechos de codigos de cabecalho e menu html

		include("head.php");
		include("nav.php") ;
?>
<!---Area de registro de atendimentos-->
<body class=" grey lighten-5">
<div class="container">
	<div class="row">
		<div class="col s12 m6 ">
    <div class="card horizontal">
    <div class="card-stacked">
        <div class="card-content">
          <img src="img\logomarca.jpg"><br>
          <label class="title-block">Registro de Novo Atendimento</label>
        </div>
        <div class="card-action">
 			<div class="input-field col s12">
			    <select class="Icons">
			    <option value="" disabled selected="" ="">Selecione Cliente</option>	
				<option value="Hospital Vera Cruz" class="circle" data-icon="img/hvc.png">Hospital Vera Cruz</option>
				<option value="Seive Off Road"class="circle" data-icon="img/seive.png" >Seive Off Road</option>
				<option value="Green Interanational Schools" class="circle" data-icon="img/green.png">Green Interanational Schools</option>
				<option value="Condominio Minas Casa" class="circle" data-icon="img/logomc.png">Condominio Minas Casa</option>
				<option value="filizola" class="circle" data-icon="img\logofg.png">Filizola Goncalves </option>
				<option value ="brr" class="circle" data-icon="img\br.png">Br Radiation</option>
			</select>

			</div>
				
				<div class="input-field col s12 ">
						<span class="">Data do Atendimento</span>
						<input type="date" name="data-atendimento">
				</div>

				<div class="input-field col s12 m6">
						<span class=""> Inicio Atendimento</span>
						<input type="time" name="data-inicio">
				</div>
				
				<div class="input-field col s12 m6">
						<span>Término Atendimento</span>
						<input type="time" name="hora-fim">
				</div>

				<div class="input-field col s12">
					<select class="Icons">
						<option value="" disabled selected=""><label>Categoria Atendimento</label></option>
						<option value="suporte" data-icon="img/boy.png" >Help Desk</option>

						<option value="servidores" data-icon="img/server.png">Service Desk</option>

						<option value="infraestrutura" data-icon="img/infra.png">Infraestrutura</option>
						
					</select>
	
				</div>
				
				<div class="input-field col  s12">
					<i class="material-icons prefix color-icon">edit-mode</i>
					<label for="descricao">Descreva aqui os serviços prestados</label>
					<input type="text" class="materialize-textarea" name="descricao">
				</div>  

				<button class="btn waves-effect waves-light" type="submit" name="action">Gravar
    			<i class="material-icons right">send</i>
  				</button>	
					</div>
   						 </div>
 							 </div>
								 </div> 
									 </div>
									</div>
<?php include("footer.php"); ?>