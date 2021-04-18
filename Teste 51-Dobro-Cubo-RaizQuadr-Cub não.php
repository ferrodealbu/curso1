<!DOCKTYPE html>
<html>
      <head>
           <link rel= "stylesheet" href="_css/estilo.css"/>
           <meta charset = "UTF - 8"/>
           <title>Teste 51-Dobro-Cubo-RaizQuadr</title>
      </head>
            <body>
                 <h1>Calcular o dobro, cubo e raiz quadrada de qualquer numero</h1>
            <div>
                <form method="get"action="Teste 51-Dobro-Cubo-RaizQuadr.php">
                         Numero:<input type="number" name= "num"/></br>
               <fieldset><legend> Multiplicação</legend>
                        <input type="radio" name="oper" value="1" id="dobro" checked/>
                        <label for="dobro">Dobro</label>
                        <input type="radio" name= "oper" value="1" id="triplo"/>
                        <label for= "triplo">Triplo</label>
                        <legend>Potenciação</legend>
                        <input type="radio" name= "oper" value="2" id="quadrado"/>
                        <label for="quadrado">Quadrado</label>
                        <input type="radio" name= "oper" value="2" id="cubo"/>
                        <label for="cubo">Cubo</label>
                        <input type="radio"name="oper" value="3" id="raiz quadrada"/>
                        <label for="raiz quadrada">Raiz Quadrada</label>
                        <input type="submit" class="submit" value="Calcular"/></br>
                </fieldset>
                </form>
            </div>
                  <?php
                 $n = isset($_GET["num"])?$_GET["num"]:0; 
                 $o = isset($_GET["oper"])?$_GET["oper"]:1;
                 switch ($o){
                         case 1:
                              $r = $n * 2;
                                break;
                              $r = $n * 3; 
                                break;
                         case 2:
                              $r = $n ^ 2;
                                break;
                              $r = $n ^ 3;
                                break;      
                         case 3:
                              $r = sqrt($n); 
                              
                        }
                        echo"O resultado da operação foi <span class='foco'>$r</span>"
                  ?>
                       </br><a href="Teste 51-Dobro-Cubo-RaizQuadr".html>Voltar</a>
            </body>
    </html>