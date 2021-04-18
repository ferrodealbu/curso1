<!DOCTYPE html>
<html>
      <head>
           <link rel="stylesheet" href= "_css/estlo.css"/>
           <meta charset= "UTF-8"/>
           <title>Teste 49-Condicionais.php</title>
        <Style>
             span.texto{
                 font-size:"40pt";
             }
        </style>
      </head>
            <body>
                <h1>FORMULARIO EM HTML</h1>
            </body>
        <div>
             <form method="get"action="Teste 49-Condicionais.php">
             Ano de Nascimento:
             <input type="number" placeholder="4 digitos" name="ano"/>
             <input type="submit" value="Verificar"/>
             </form>
        <span.class'texto'>
        </br>Mostrar o ano de nascimento e verificar se o usuario pode votar e dirigir.
        </span>
        </div>
            <body>
                 <h2>CONDICIONAIS EM PHP</h2>
            </body>
    <?php
            $a = isset($_GET["ano"])?$_GET["ano"]:"1900";
            $i = date ("Y") - $a;
        echo"</br>voce nasceu no ano de $a e tem $i anos";
        if
          ($i>=18){
            $v="pode votar";
            $d="pode dirigir";
        }
        if 
          ($i<16){
             $v="não vota";
             $d="não dirige";
        }
        else {
            $v="votar é obrigatorio";
            echo"</br>Com essa idade voce pode $v e $d";

        }
    ?>
</html>









            
            
      