<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF- 8"/>
        <title>Teste 27</title>
    </head>
    <body>
        <h1>ATRIBUIÇÕES</h1>
        <h2>USO DE OPERADORES DE ATRIBUIÇÕES</h2>
        <h3>CALCULO DE 30% DE DESCONTO NUMA COMPRA</h3>
    </body> 
    <?php
    $preco = $_GET["p"];
    echo"</br>o preço da compra é $preco"; 
    $preco-=$preco*30/100;
    echo"</br>o preço da compra com desconto é $preco";
    ?>
    </body>
</html>   