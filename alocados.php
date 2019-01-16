<?php
include ("head.php");
include ("nav.php");
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
			    <select class="Icons">
			    <option value="" disabled selected="" ="">Selecione Cliente</option>	
				<option value="Hospital Vera Cruz" class="circle" data-icon="img/hvc.png">Hospital Vera Cruz</option>
				<option value="Green Interanational Schools" class="circle" data-icon="img/green.png">Green Interanational Schools</option>
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


				<button class="btn waves-effect waves-light" type="submit" name="action">Gravar
    			<i class="material-icons right">send</i>
  				</button>	
					</div>
   						 </div>
 							 </div>
								 </div> 
									 </div>
									</div>

  <?php include ("footer.php"); ?>


