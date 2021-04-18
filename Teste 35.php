<!DOCTYPE html>
    <html>
         <head>
         <meta charset = "UTF - 8"/>
         <title>Teste 35</title>
         </head>
    <div>
    <body>
          <h1>COMPARAÇÕES EM PHP</h1>
          <h2>Operadores Relacionais</h2>
        <?php
          $n1 = $_GET["a"];
          $n2 = $_GET["b"];
          $tipo = $_GET["op"];
          echo"</br>Os valores inseridos foram $n1 e $n2 ";
          $r = ($tipo == "s")?$n1+$n2:$n1*$n2;
          echo"</br>O resultado será $r ";
          /* Para o usuário escolher somar ou multiplicar*/;
          /*Qualquer letra que substituir o "s" vai informar multiplicar*/;
          ?>
    </body>
    </div>
    </html>  