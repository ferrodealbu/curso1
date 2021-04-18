<!DOCTYPE html>
          <html>
               <head>
                    <link rel= "stylessheet" href="_css/estilo.css"/>
                    <meta charset= "UTF -8"/>
                    <title>Teste 52-Switch-Dia da Semana</title>
               </head>
                    <body>
                      <h1>De 2 a 6 - Dias da semana que tem aula</h1>
                      <h2>De 7 a 8 - Dias de descanso</h2>
                      <h3>Acima de 8 - Não tem aula</h3>
                 <div>
                    <form method= "get" action ="Teste 52-Switch-Dia da Semana.php">
                      Dia da Semana: <input type="number" name="ds" min="2" max="8" required=""/>
                      <input type="submit" class="botao" value="Analisar"/>
                    </form>
                 </div>
                    <?php
                         $d = isset($_GET["ds"])?$_GET["ds"]:0;
                         switch($d) {
                               case 2:
                               case 3:
                               case 4:
                               case 5:
                               case 6:
                                    echo"levanta e vai para a escola! :)";
                               break;
                               case 7:
                               case 8:
                                    echo"Descanse, pequeno estudante! ;)";
                               break;
                               default:
                                    echo"Dia da semana invalido ";

                                   }
                                    ?>
                              <a href= "javascript: history.go (-1)" class= "botao">Voltar</a>
                   </body>
          </html> 