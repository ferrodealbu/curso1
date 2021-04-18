<!DOCTYPE html>
<html>
      <head>
           <link rel="stylesheet"href="_css/estilo.css"/> 
           <meta charset="UTF-8"/>
           <title>Teste 42</title>
      </head>
      <div>
          <form method="GET"action="01valor.php">
          valor:<input type="number"name="v"/>
          <input type="submit"value="calcular raiz quadrada"/>
          </form>
     </div>
      <body>
           <h1>FORMULARIOS EM HTML</h1>
     <?php
          $valor = $_GET["v"];
          $rq = sqrt($valor);
          echo"O valor inserido foi $valor ";
          echo"</br>O valor inserido em R$ é ".number_format($valor,2);
          echo"</br>A raiz quadrada de $valor é $rq ";
     ?>
          <a href="Teste 42.php"></br>voltar</a>
     </body>
</html>      