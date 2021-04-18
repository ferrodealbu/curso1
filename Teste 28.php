<!DOCTYPEhtml>
<html>
    <head>
           <meta charset= "UTF - 8"/>
           <title>Teste 28</title>
    </head>
<body>
      <h1>CONVERSÃO DE NUMEROS INTEIROS EM MOEDA</h1>
      <h2>Converter 1286957 em R$</h2>
<div>
     <?php
      $v1 = $_GET["x"];
      echo"</br>o numero $v1 em R$ é ".number_format($v1,2,",",".");
    ?>
</div>
</body>
</html>