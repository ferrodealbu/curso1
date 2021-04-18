<!DOCTYPE html>
<html>
      <head>
           <link rel="stylesheet" href= "_css/estlo.css"/>
           <meta charset= "UTF-8"/>
           <title>Teste 50-Condicionaisaninhadas.php</title>
      <style>
            span.texto {
                  font-size:30pt;
                  color:#6b6fez;
            }
      </style>
      </head>
            <body>
                <h1>CONDICIONAIS ANINHADAS EM PHP</h1>
            </body>
      <div>
      <form method="get" action="Teste 50-Condicionaisaninhadas.php">
      Ano de Nascimento:
      <input type="number" placeholder="4 digitos" name="ano":1952/>
      <input type="submit" value="Verificar"/>
      </form>
          <span.class'texto'>
         </br> Considerar as condiçoes aninhadas para verificar o voto opcional.
          </span>
      </div>
      <?php
           $ano= isset($_GET["ano"])?$_GET["ano"]:"1952";
           $idade= date("Y") - $ano;
           switch($ano) {
            if ($idade<16){ 
                case 1:
                    $tipovoto="não vota";
                echo"</br>case 1";
                break;
            }
            else {
                if(($idade>=16&&$idade<18)||($idade>65)) {   
                case 2:
                     $tipovoto="voto opcional";
                echo"</br>case 2";
                break;
                }
                else{
                default;
                      $tipovoto="voto obrigatoroio";
                echo"</br>case 3"; 
                }
            }
                echo"</br>A sua idade é $idade anos voce não vota";
                echo"</br>Com essa idade $idade anos o voto é opcional";
                echo"</br>Com essa idade $idade anos voce vota o voto é obrigatorio";
                
      ?>
      </html> 

