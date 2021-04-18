<!doctype html>
<html>
    <head>
       <meta charset = "UTF - 8"/>
       <title>Teste 24</title>
    </head>
    <body>
        <h1>RESUMO DOS EXERCICIOS</h1>
    <?php
    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    $v3 = $_GET["w"];
    $v4 = $_GET["z"];
    $s = $v1+$v2+$v3;
    $m = ($v1+$v2+$v3)/3;
    $p = $v1*$v2*$v3;
    $d = $v3/$v2;
    $b = $v3-$v2;
    echo"</br>Valores recebidos: $v1,$v2,$v3,$v4";
    echo"</br>O Valor Absoluto de $v1 é ".abs($v1);
    echo"</br>O Valor de $v2<sup>3</sup> é ".pow($v2,3);
    echo"</br>A raiz quadrada de $v3 é ".sqrt($v3);
    echo"</br>O Valor Arredondado de $v4 é ".round($v4);
    echo"</br>O Valor inteiro de $v4 é ".intval($v4);
    echo"</br>O Valor de $v4 em R$ é ".number_format($v4,2);
    echo"</br>A Soma entre ($v1+$v2+$v3) é $s";
    echo"</br>A media aritmetica é $m";
    echo"</br>O Valor de $m em ceil é ".ceil($m);
    echo"</br>O Valor de $m em floor é ".floor($m);
    echo"</br>O produto entre $v1*$v2*$v3 é $p";
    echo"</br>A divisão entre $v3/$v2 é $d";
    echo"</br>A subtração entre ($v3-$v2) é $b";
    ?>
    </body>
</html>