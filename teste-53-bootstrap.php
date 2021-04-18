
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>SISREGBRASIL</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="/images/flag-brazil.jpeg" alt="" width="90" height="57">
      <h2>SISREGBRASIL - Sistema de Regiões do Brasil</h2>
      <p class="lead">Localização das regiões do BRASIL.</p>
    </div>

    <?php
        $eb = isset($_GET["eb"])?$_GET["eb"]:0;
        switch($eb){
            case 1:
                $eb = "NORTE";
                // echo "Você mora na região NORTE.";
                break;
            case 2:
                $eb = "NORDESTE";
                // echo "Você mora na região .";
                break;
            case 3:
                $eb = "SULDESTE";
                // echo "Você mora na região SULDESTE.";
                break;
            case 4:
                $eb = "CENTROESTE";
                // echo "Você mora na região CENTROESTE.";
                break;
            case 5:
                $eb = "SUL";
                // echo "Você mora na região SUL.";
                break;
            }
    ?>


    <div class="row g-12">
      <div class="col-md-12 col-lg-12">
        <h4 class="mb-3">1. Informe seu estado</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-12">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Estado</label>
              <select name="eb" class="form-select" id="country" required>
              <option value="">Selecione...</option>
                      <option value="1">Acre</option>
                      <option value="2">Alagoas</option>
                      <option value="1">Amapá</option>
                      <option value="1">Amazonas</option>
                      <option value="2">Bahia</option>
                      <option value="2">Ceará</option>
                      <option value="3">Espírito Santo</option>
                      <option value="4">Goiás</option>
                      <option value="2">Maranhão</option>
                      <option value="4">Mato Grosso</option>
                      <option value="4">Mato Grosso do Sul</option>
                      <option value="3">Minas Gerais</option>
                      <option value="1">Pará</option>
                      <option value="2">Paraíba</option>
                      <option value="5">Paraná</option>
                      <option value="2">Pernambuco</option>
                      <option value="2">Piauí</option>
                      <option value="3">Rio de Janeiro</option>
                      <option value="2">Rio Grande do Norte</option>
                      <option value="5">Rio Grande do Sul</option>
                      <option value="1">Rondônia</option>
                      <option value="1">Roraima</option>
                      <option value="5">Santa Catarina</option>
                      <option value="3">São Paulo</option>
                      <option value="2">Sergipe</option>
                      <option value="1">Tocantins</option>
              </select>

                
            <?php if(!empty($eb)){ ?>
                    <p>
                        <div class="alert alert-success" >
                            Você mora na região <?php echo $eb; ?>.
                        </div>
                    </p>
            <?php } ?>
              
              
                </br>
                <button type="submit" class="btn btn-primary">Verificar</button>
                <button type="submit" class="btn btn-secondary">Voltar</button>
              
            </div>

          <hr class="my-4">

          </div>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2021 Fernando Business</p>
  </footer>
</div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
