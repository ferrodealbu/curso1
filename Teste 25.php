<!doctype html>
<html>
    <head>
          <meta charset = "UTF - 8"/> 
          <title>Teste 25</title>
    </head>
    <body>
          <h1>CALCULO COM AUMENTO DE10%</h1>
          <h2>VALORES EM MOEDA COM 2 DECIMAIS</h2>
          <h3>USO DA CONCATENAÇÃO ".NUMBER_FORMAT"</h3>
        <div>
          <?php
          $preco = $_GET ["p"];
          $a = $preco+($preco*10/100);
          echo"</br>O valor do objeto em R$ é ".number_format($preco,2,",",".");
          echo"</br>O valor do objeto em R$ com 10% de aumento é ".number_format($a,2,",",".");
         ?>
        </div>
    </body>
</html>      