<!DOCTYPE html>
<Html>
    <head>
    <meta charset = "UTF - 8"/>
    <title>Teste 26</title>
<body>
    <h1>USO DO NUMBER_FORMAT EM ATRIBUIÇÕES</h1>
    <h2>CALCULO DE 20% DE DESCONTO NUMA COMPRA</h2>
</body>
<?php
    $preco1 = $_GET["x"];
    $preco2 = $preco1-($preco1*20)/100;
    echo"</br>O preco da compra em R$ é ".number_format($preco1,2,",",".");
    echo"</br>A compra em R$ com 20% de desconto é ".number_format($preco2,2,",",".");
?>
    </head>
</html>