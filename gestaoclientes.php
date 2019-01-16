<?php 
include("head.php");
include("nav.php");
include_once("dbconect.php");
include("messagecaduser.php");
?>

 <div class="row">


 	<div class="col s12 m8 push-m2 ">
 		<div class="container">
 			<h4 class="light">Gestão de Clientes</h4>
        <table class= "striped">
        <thead>
          <tr>
              <th>Razão Social</th>
              <th>Cnpj</th>
              <th>Email</th>
              <th>Telefone</th>
          </tr>
        </thead>
		<tbody>
      <?php 
        # a variavel busca guarada a consulta no banco que trará os dados dos usuários castrados
        $busca="SELECT razaosocial ,cnpj,email , telefone FROM cliente c JOIN papel ";
        # a variavel resultado grava a função mysqli que tem como parametros a conexão e o select na tabela 

        $resultado=mysqli_query($connect, $busca);
        # este loop de repetição ocorre  ENQUANTO hover uma proxima linha na tabela usuário com base na consulta feita
          while ($dados= mysqli_fetch_array($resultado)) :
          
      ?>
            <tr>
            <td><?php echo $dados['razaosocial']; # Exibindo em um bloco da tabela o campo razaosocial ?></td>
            <td><?php echo $dados['cnpj']; # Exibindo em um bloco da tabela o campo cnpj?></td>
            <td><?php echo $dados['email'];# Exibindo em um bloco da tabela email ?></td>
            <td><?php echo $dados['telefone'];# Exibindo em um bloco da tabela telefone do cliante ?></td>

            <td><a class="btn-floating btn-small waves-effect waves-light blue"><i class="material-icons">edit</i></a>
        </td>
              <td><a class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">delete</i></a>
        </td>
          </tr>

          <?php 
          //fim da estrutura de repetição que traz dados do banco enquanto houver uma próxima linha
        endwhile;?>
        </tbody>
      </table><br>
      	<a class="waves-effect waves-light btn" href="cadastracliente.php"><i class="material-icons left">add</i>Adicionar</a>
            </div>
        </div>
    </div>
  <?php include"footer.php"; ?>