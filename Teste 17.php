<!doctype html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>"Teste 17"</title>
</head>
<body>
    <h1>POTENCIAÇÃO
    </h1>
    <?php 
    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    echo"Valores recebidos $v1 e $v2 ";
    echo"</br>O valor absoluto de $v1 e ".abs($v1);
    echo"</br>O valor de $v2<sup>4</sup> e ". pow($v2,4); 
    ?>
</body>
</html>