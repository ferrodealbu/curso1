<!DOCTYPE html>
<html>
     <head>
           <meta charset = "UTF - 8"/>
           <title>Teste 38</title>
    </head>
        <div>
        <body>
             <h1>OPERADORES RELACIONAIS</h1>
            <h2>USANDO A CONCATENAÇÃO NO OPERADOR UNÁRIO</h3>
             <h3>Situação do aluno conforme sua média</h3>
            <?php
            $n1 = $_GET["n1"];
            $n2 = $_GET["n2"];
            $m = ($n1+$n2)/2;
            echo"</br>A média do aluno foi $m ";
            echo"</br>A situação do aluno é ".(($m<6)?"REPROVADO":"APROVADO");
            /*OPERADOR UNÁRIO: (SE)Expressão?(ENTÃO)Verdadeiro:(SENÃO)Falso*/;
            ?>
        </body>
        </div>
        </html>