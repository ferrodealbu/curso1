<!DOCTYPE html>
<html>
     <head>
           <meta charset = "UTF - 8"/>
           <title>Teste 37</title>
    </head>
        <div>
        <body>
             <h1>OPERADORES RELACIONAIS</h1>
             <h2>Situação do aluno conforme sua média</h2>
            <?php
            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];
            $m = ($n1+$n2)/2;
            $sit= ($m<6)?"REPROVADO":"APROVADO";
            echo"</br>A média do aluno foi $m ";
            echo"</br>A situação do aluno é $sit ";
           ?>
        </body>
        </div>
        </html>