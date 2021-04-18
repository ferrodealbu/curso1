<!DOCTYPE html>
<html>
     <head>
          <link rel="stylesheet" href="_css/estilo.css"/>
          <meta charset= "UTF - 8"/>
          <title>Teste 53-Região do Estado</title>
     </head>
           <body>
                <h1>Mostrar a Região do Estado</h1>
           </body>
                 <div>
                    <form method="get" action= "Teste 53-Região do Estado.php">
                    Estado: <input type="estados do brasil" name="eb">
                    <input type="submit" value="Verificar"/></br>
                    </form>   
                  </div>
                <?php
                     $eb = isset($_GET["eb"])?$_GET["eb"]:0;
                     switch($eb){
                            case 1:
                            case 2:
                            case 3:
                            case 4:
                            case 5:
                            echo"</br>Voce mora na Região $eb";  
                     }    
                ?>
                    <a href="javascript:history.go(-1)"class="botao">Voltar</a></br>
    </html>