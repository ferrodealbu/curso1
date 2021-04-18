<!doctype html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>"Teste 16"</title>
    <style>
        <Font>12pt, arial</Font>;
        <color>#171559;
    </style>
</head>
<body>
    <h1>VALORES PERSONALIZADOS</h1>
    <?php 
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $s = ($n1+$n2)/2;
    echo"</br>Valores recebidos $n1 e $n2";
    echo"</Br>O Valor Absoluto de $n1 é ".abs($n1);
    echo"</br>A Soma ($n1+$n2) vale ".($n1+$n2);
    echo"</br>O valor de ($n1+$n2)/2 é ".$s;

    ?>
</body> 
</html>