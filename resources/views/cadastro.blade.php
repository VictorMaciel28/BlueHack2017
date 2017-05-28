<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/cadastro.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="section barra-cadastro">
              <h4 class="text-center text-white">Cadastro da mamãe (ou do Papai)</h4>
            </div>
            <form action="{{route('cadastrar')}}" method="POST">
              <div class="form-group">
                {{csrf_field()}}
                <select class="form-control login-input select" name="sexo" id="sel1">
                 <<option disabled selected>Você é papai ou mamãe ?</option>
                 <option value="M">Papai</option>
                 <option value="F">Mamãe</option>

               </select>
                <input type="text" name="nome" class="form-control login-input" placeholder="Nome">
              </div>
              <div class="form-group">
                <input type="text" name="sobrenome" class="form-control login-input" placeholder="Sobrenome">
              </div>
              <div class="form-group">
                <input type="text" name="estado" class="form-control login-input" placeholder="Estado">
              </div>
              <div class="form-group">
                <input type="text" name="cidade" class="form-control login-input" placeholder="Cidade">
              </div>
              <div class="form-group">
                <input type="text" name="bairro" class="form-control login-input" placeholder="Bairro">
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control login-input" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="password" name="senha" class="form-control login-input" placeholder="Senha">
              </div>
              <div class="section barra-cadastro">
                <h4 class="text-center text-white">Cadastro do Neném</h4>
              </div>
              <div class="form-group">
                <input type="text" name="nome_filho" class="form-control login-input" placeholder="Nome">
              </div>
              <div class="form-group">
                <input type="number" name="altura" class="form-control login-input" placeholder="Altura">
              </div>
              <div class="form-group">
                <input type="number" name="peso" class="form-control login-input" placeholder="Peso">
              </div>
              <div class="form-group">
                <input type="number" name="tamanho_pe" class="form-control login-input" placeholder="Qual o tamanho do pé?">
              </div>
              <div class="form-group">
               <select class="form-control login-input select" name="tamanho_fralda" id="sel1">
                 <<option disabled selected>Tamanho da fralda</option>
                 <option>RN</option>
                 <option>P</option>
                 <option>M</option>
                 <option>G</option>
               </select>
              </div>
              <div class="form-group">
               <select class="form-control login-input select" name="tamanho_roupa" id="sel1">
                 <<option disabled selected>Tamanho da roupa</option>
                 <option>RN</option>
                 <option>P</option>
                 <option>M</option>
                 <option>G</option>
                 <option>GG</option>
                 <option>1</option>
                 <option>2</option>
                 <option>3</option>
                 <option>4</option>
                 <option>6</option>
                 <option>8</option>
                 <option>10</option>
               </select>
              </div>
              <input class="cadastro-button" type="submit" name="" value="Cadastrar">
              </form>
            </div>
          </div>
        </div>
      </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!--build:js js/main.min.js -->
    <script src="/js/menu.js"></script>
    <!-- endbuild -->
  </body>
</html>
