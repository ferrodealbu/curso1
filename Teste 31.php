<!DOCTYPE html
<hml>
<head>
    <meta charset = "UTF - 8"/>
    <Title>Teste 31</title>
</head>
<div>
<Body>
      <h1>SALDO ATUAL E O SALDO ANTERIOR</h1>
      <h2>PRE-DECREMENTO</h2> 
</div>   
</body>     
     <?php
          $ini = $_GET["a"];
          $Ret = $_GET["b"];
          echo"</br>O saldo inicial era ".$ini;
          echo"</br>O valor que foi retirado ".$Ret;
          echo"</br>O Saldo anterior é ".--$ini;
          
    ?>
</body>
</html>