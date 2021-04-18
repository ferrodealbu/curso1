<!DOCTYPE html>
<html>
     <head>
          <link rel = "stylesheet" href ="_css/estilo.css"/>
          <meta charset = "UTF - 8"/>
          <title>Teste 41</title>
     </head>
         <div>
         <body>
            <h1>INTEGRAÇÃO HTML 5 COM PHP</h1>
            <h2>MOSTRE O VALOR DO Nº REAL RECEBIDO E SUA RAIZ QUADRADA</h2>
            <h3>USO DO number_format PARA REDUZIR Nº ASTRONOMICO</h3> 
         <?php
               $valor1 = $_GET["v1"];
               $rq = sqrt($valor1);
               echo"</br>O valor recebido foi $valor1 ";
               echo"</br>A raiz quadrada de $valor1 é ". number_format($rq,2);
         ?>
          </body>
          </div>
</html>