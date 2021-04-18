<!DOCTYPE html>
<html>
     <head>
          <link rel ="stylesheet" href="_css/estilo.css"/>
          <meta charset = "UTF - 8"/>
          <title>Teste 44 - Op.Ternario</title>
     </head>
    <body>
         <h1>INTEGRAÇÃO HTML COM PHP</h1>
         <h2>APLICANDO A Tag 'isset' CONFIGURANDO DADOS</h2>
         <h3>Para eliminar erros por dados não informados na URL</h3>
    <div> 
          <?php
              $nome = isset ($_GET["nome"])?$_GET["nome"]:"[não informado]";
              $ano = isset ($_GET["ano"])?$_GET["não informado"]:0;
              $sexo = isset ($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
              $idade = date("Y")-$ano;
              echo"Me chamo $nome nasci no ano de $ano ";
              echo"</br>Sou do sexo $sexo e tenho $idade anos";
          ?>
          <a href ="Teste 44.html"></br>voltar</a>
    </div>
    </body>
</html>
