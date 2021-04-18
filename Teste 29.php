<!DOCTYPE html>
<html>
     <head>
          <meta charser ="UTF-8"/>
          <title>Teste 29</title>
     </head>
<div>
<body>
     <h1>OPERADORES DE INCREMENTO</h1>
     <h2>PRE INCREMENTO</h2>
     <h3>MOSTRAR O ANO ATUAL E O ANO POSTERIOR AO ATUAL</h3>
        <?php
        $atual = $_GET["aa"];
        echo"</br>O ano atual é ".$atual;
        echo"</br>O ano apos ao atual é ".++$atual;
        ?>
<body>
     <h1>PÓS INCREMENTO</h1>
     <h2>MOSTRAR O ANO ATUAL E O ANO QUE NASCI</h2>
        <?php
        $atual = $_GET["aa"];
        $idade = 68;
        $an = $atual-$idade - 1;
        echo"</br>O ano atual é ".$atual; 
        echo"</br>O ano que nasci é ".$an++;
        //*O php calcula a idade com um ano adiantado*//;
        //*É o resultado do ano atual menos o ano de nascimento*//
        //*por isso,informa 1 ano a mais do ano certo de nascimento*// 
        //*então a idade deve ser subtraida de 1 ano que foi adiantado*//
        //*para que seja informado o ano de nascimento correto*//
        //*na verdade a idade seguinte começa no dia de cada aniversario*// 
        ?> 
</body>     
</div>
</html>
 