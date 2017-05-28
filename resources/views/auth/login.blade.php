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
    <link rel="stylesheet" href="css/index.css">

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
            <img class="center-block img-responsive logo" src="images/logo-mpm.png" alt="">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
              <div class="form-group">
                <input type="email" name="email" class="form-control login-input" id="formGroupExampleInput" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control login-input" id="e" placeholder="Senha">
              </div>
              <center>
                <input class="btn form-login" type="submit" name="" value="Entrar">
              </center>
              <br>
              <center>
                <p><a class="senha" href="#">Esqueceu sua senha?</a></p>
              </center>
            </form>
          </div>
          <center>
            <div class="col-md-4">
              <button type="button" class="btn cadastro" aria-label="Left Align">Cadastre-se
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
              </button>
            </div>
          </center>
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!--build:js js/main.min.js -->
    <script src="js/menu.js"></script>
    <!-- endbuild -->
  </body>
</html>
