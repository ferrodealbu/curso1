<!DOCTYPE html>
<html>
     <head>
          <meta charser ="UTF-8"/>
          <title>Teste 29</title>
     </head>
<div>
<body>
     <h1>PRE INCREMENTO</h1>
     <h2>MOSTRAR O ANO ATUAL E O ANO POSTERIOR AO ATUAL</h2>
        <?php
        $atual = $_GET["aa"];
        echo"</br>O ano atual de Rodrigo é ".$atual;
        echo"</br>O ano apos ao atual de Rodrigo será ".++$atual;
     <h3>PÓS INCREMENTO</h3>
     <h4>MOSTRAR O ANO QUE RODRIGO NASCEU</h4>
        <?php
        $atual = $_GET["aa"];
        $idade = 32;
        $an = $atual-$idade;
        $a1 = $atual-$idade-1; 
        echo"</br>A idade de Rodrigo é $idade o ano atual Rodrigo  é ".$atual; 
        echo"</br>E o ano que Rodrigo nasceu foi ".$an++;
        echo"</br>O ano correto que Rodrigo nasceu foi ".$a1++;
        echo"</br>Mas está com 33 anos antes de completar 33 anos;
        //*O php calcula a idade com um ano adiantado*//
        //*É o resultado do ano atual menos o ano de nascimento*//
        //*por isso,informa 1 ano a mais do ano certo de nascimento*// 
        //*então a idade deve ser subtraida de 1 ano que foi adiantado*//
        //*para que seja informado o ano de nascimento correto*//
        //*na verdade a idade seguinte começa no dia de cada aniversario*//  
         ?> 
</body>
</div>
</html>
 