<!DOCTYPE html>
<html>
    <head>
         <link rel="Teste 47.php" href="_css/estilo.css"/>
         <meta charset = "UTF-8"/>
         <title>Teste 47</title>
    <style>
          span.texto {
               font-size: <?php echo $tam; ?>;
               color: <?php echo $cor; ?>;
               }
    </style>
    </head>
    <body>
         <h1>FORMULÁRIO COM TEXTO, TAMANHO E COR</h1>
    <div>
        <?php
            $texto = isset($_GET["texto"])?$_GET["texto"]:"texto";
            $tam = isset($_GET["tam"])?$_GET["15pt"]:"15pt";
            $cor = isset($_GET["cor"])?$_GET["#0000ff"]:"#0000ff";
            echo"O texto refere-se a um formulario";

        ?>
    </div>
    </body>
</html>
        
 