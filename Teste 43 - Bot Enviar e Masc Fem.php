<!DOCTYPE html>
<html>
      <head>
           <link rel = "stylesheet" href="_css/estilo.css"/> 
           <meta charset ="UTF - 8"/>
           <title>Teste 43</title>
     </head>
     <div>
<form method="get" action= "Teste 43 idade.php">
     Nome:<imput type ="text" name ="nome"/></br>
     Ano de Nascimento:<imput type ="number" name = "ano"/></br>
     <fieldset><legend>sexo</legend>
          <imput type="radio" name="sexo" id="masc" value="homem" checked/>
          <label for="masc" >masculino</label></br>
          <imput type="radio" name="sexo" id="fem" value="mulher" checked/>
          <label for="fem">feminino</label>
     </fieldset></br>
          <imput type="submit" value="Enviar"/></br>
</form>
     </div>
      <body>
           <h1>CRIAÇÃO DE FORMULÁRIO EM HTML PARA</h1>
           <h2>REGISTRO DE NOME, ANO DE NASCIMENTO, SEXO,IDADE</h2>
          <?php
               $nome = $_GET["nome"];
               $sexo = $_GET["sexo"];
               $ano = $_GET["ano"];
               $idade = date("Y")-$ano;
               echo "Meu filho se chama $nome e nasceu no ano de $ano";
               echo"</br>Meu filho é $sexo e tem  $idade anos";
          ?>
     </body>
</html>