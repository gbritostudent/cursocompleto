<?php  
//inserindo os trechos de codigos de cabecalho e menu html

		include("head.php");
		include("nav.php") ;
?>
<body>
<!---Area de registro de atendimentos-->
<body>
<div class="container">
	<div class="row">
		<div class="col s12 m6 ">
    <div class="card horizontal">
      	
      <div class="card-stacked">
        <div class="card-content">
          <img src="img\logomarca.jpg">
        </div>
        <div class="card-action">
 			<div class="input-field col s12">
			    <select multiple class="Icons">
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
						<span class="">Periodo Inicial (De)</span>
						<input type="date" name="data-atendimento">
				</div>

				<div class="input-field col s12 ">
						<span class="">Perido Final (Até)</span>
						<input type="date" name="data-atendimento">
				</div>
				
				<button class="btn waves-effect waves-light" type="submit" name="action">Extrato
    			<i class="material-icons right">send</i>
  				</button>	
					</div>
   						 </div>
 							 </div>
								 </div> 
									 </div>
									</div>
    <?php 
    //incluindo o rodape da pagina e os javascripts necessarios para correto funcionamento do layout
include ("footer.php");
     ?>