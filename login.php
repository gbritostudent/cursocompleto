<?php 
//inserindo o trecho de codigo com a cabecalho de arquivo
include "head.php";
include"navdisabled.php";

 ?>
<body class=" grey lighten-5">
<div class="row center">
          <section class="container">

            <?php include"messagelogin.php";?>

          <form  method="POST" action="autentica.php" class=" col s12 m12 l6 white offset-l3 center">
          <img src="img/logomarca.jpg" class="responsive-img"><br>
          <label>Insira suas Credencias para Acessar o Portal </label>
          <div class="input-field ">
          <i class="material-icons prefix">account_circle</i>
          <input type="email" name="login" class="validate">
          <label for ="login"> Seu Login</label>
          </div>
          <div class="input-field">
          <i class="material-icons prefix"> lock_open</i>
          <input type="password" name="senha">
          <label for="senha">Sua Senha </label>
          </div>
          <div class="input-field ">
           <button class=" circle btn btn-menor waves-effect waves-light " type="submit" name="entrar">Entrar
           <i class="material-icons left">send</i>
          </button>
          <br>
          <br>
          </div>
        </form>
        </section>
        </div>
        <br>
        <br>
        

<?php include "footer.php" ?>