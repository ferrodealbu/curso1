<!doctype html>
<html>
    <head>
       <meta charset = "UTF - 8"/>
       <title>Teste 23</title>
    </head>
    <body>
        <h1>INTVAL - VALOR INTEIRO DE UMA VARIAVEL DECIMAL</h1>
        
    <?php

    $v1 = $_GET["x"];
    $v2 = $_GET["y"]; 
    echo"</br>O Valor inteiro de $v1 é ".intval($v1);
    echo"</br>O Valor de $v2 em R$ é ".number_format($v2,2);
    echo"</br>A Soma entre $v1 e $v2 é igual a".($v1+$v2);
    
    ?>
    </body>
</html>