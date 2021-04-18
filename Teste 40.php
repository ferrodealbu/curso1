DOCTYPE html>
<html>
     <head>
 <!         <link rel = "stylesheet" href ="_css/estilo.css"/>
          <meta charset = "UTF - 8"/>
          <title>Teste 40</title>
     </head>
         <div>
         <body>
            <h1>INTEGRAÇÃO HTML 5 COM PHP</h1>
            <h2>MOSTRE O VALOR DO Nº INTEIRO RECEBIDO E SUA RAIZ QUADRADA</h2>
         <?php
               $valor = $_GET["v"];
               $rq = sqrt($valor);
               echo"</br>O valor recebido foi $valor "; 
               echo"</br>A raiz quadrada de $valor é $rq ";
         ?>
          </body>
          </div>
</html>