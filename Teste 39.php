<!DOCTYPE html>
<html>
     <head>
          <link rel = "stylesheet" href ="_css/estilo.css"/>
          <meta charset = "UTF - 8"/>
          <Title>Teste 39</title>
     </head>
         <div>
         <body>
            <h1>OPERADORES LÓGICOS</h1>
            <h2>MOSTRAR SE O ELEITOR É OBRIGADO A VOTAR</h2>
         <?php
               $ano = $_GET["an"];
               $idade = 2021 - $ano;
               $tipo = ($idade>=18&&$idade<65)?"VOTA":"NÃO VOTA";
               echo"</br>Nascidos no ano de $ano tem $idade anos  portanto $tipo ";
         ?>
          </body>
          </div>
</html>