<!doctype html>
<html>
<head>
     <meta charset = "UTF - 8"/>
     <title>Teste 22</title>
</head>
    <body>
          <h1>F0RMATAÇÃO</h1>
<?php
    $v1 = $_GET["a"]; 
    $v2 = $_GET["b"];
    $s = $v1+$v2;
    echo"</br>O valor de $v1 em R$ é ".number_format($v1,2);
    echo"</br>O valor de $v2 em R$ é ".number_format($v2,2);
    echo"</br>A Soma entre $v1 e $v2 é igual a ".number_format($s,2);
?>
    </body>
</html>