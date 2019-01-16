<?php 
include("head.php");
include("nav.php");
include_once("dbconect.php");
include("messagecaduser.php");
?>

 <div class="row">


 	<div class="col s12 m8 push-m2 ">
 		<div class="container">
 			<h4 class="light">Gestão de usuários</h4>
        <table class= "striped">
        <thead>
          <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Papel</th>
           
          </tr>
        </thead>
		<tbody>
      <?php 
        # a variavel busca guarada a consulta no banco que trará os dados dos usuários castrados
        $busca="SELECT nome ,login,papelusuario FROM usuario u JOIN papel p ON u.papel_idpapel = p.idpapel ";
        # a variavel resultado grava a função mysqli que tem como parametros a conexão e o select na tabela 

        $resultado=mysqli_query($connect, $busca);
        # este loop de repetição ocorre  ENQUANTO hover uma proxima linha na tabela usuário com base na consulta feita
          while ($dados= mysqli_fetch_array($resultado)) :
          
      ?>
            <tr>
            <td><?php echo $dados['nome']; # Exibindo em um bloco da tabela o campo nome ?></td>
            <td><?php echo $dados['login']; # Exibindo em um bloco da tabela o campo login?></td>
            <td><?php echo $dados['papelusuario'];# Exibindo em um bloco da tabela o papel do  usuario ?></td>

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
      	<a class="waves-effect waves-light btn" href="cadastrausuario.php"><i class="material-icons left">add</i>Adicionar</a>
            </div>
        </div>
    </div>
  <?php include"footer.php"; ?>