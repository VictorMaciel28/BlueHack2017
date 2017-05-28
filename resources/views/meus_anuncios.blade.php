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
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/searchbar.css">
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/card.css">
    <link rel="stylesheet" href="/css/chat.css">
    <link rel="stylesheet" href="/css/modal-chat.css">
    <link rel="stylesheet" href="/css/mensagens.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
    <nav>
      <div class='navbar nav-color navbar-default navbar-fixed-top'>
          <div class='container'>
              <div class='navbar-header'>
                  <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#navbar-ex-collapse'>
                      <span class='sr-only'>Toggle navigation</span>
                      <span class='icon-bar'></span>
                      <span class='icon-bar'></span>
                      <span class='icon-bar'></span>
                  </button>
                  <nav class="navbar navbar-fixed-left navbar-minimal animate" role="navigation">
                		<div class="navbar-toggler animate">
                			<span class="menu-icon"></span>
                		</div>
                		<ul class="navbar-menu animate">
                			<li>
                				<a href="#about-us" class="animate">
                					<span class="desc animate">Editar cadastro</span>
                					<span class="glyphicon glyphicon-edit"></span>
                				</a>
                			</li>
                			<li>
                				<a href="{{route('produtos.create')}}" class="animate">
                					<span class="desc animate">Inserir produto</span>
                					<span class="glyphicon glyphicon-plus-sign"></span>
                				</a>
                			</li>
                			<li>
                				<a href="#contact-us" class="animate">
                					<span class="desc animate">Histórico de trocas</span>
                					<span class="glyphicon glyphicon-th-list"></span>
                				</a>
                			</li>
                      <li>
                				<a href="{{route('anuncios')}}" class="animate">
                					<span class="desc animate">Meus anúncios</span>
                					<span class="glyphicon glyphicon-paperclip"></span>
                				</a>
                			</li>
                      <li>
                				<a href="#contact-us" class="animate">
                					<span class="desc animate">Mensagens</span>
                					<span class="glyphicon glyphicon-envelope"></span>
                				</a>
                			</li>
                		</ul>
                	</nav>
              </div>
              <div class='collapse navbar-collapse' id='navbar-ex-collapse'>
                  <ul class='nav navbar-nav navbar-right'>
                    <div class="col-sm-4 col-sm-offset-8">
                          <div class="input-group stylish-input-group">
                              <input type="text" class="form-control"  placeholder="Pesquisar produtos" >
                              <span class="input-group-addon">
                                  <button type="submit">
                                      <span class="glyphicon glyphicon-search"></span>
                                  </button>
                              </span>
                          </div>
                      </div>
                  </ul>
              </div>
          </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="section mensagens">
      <div class="container">
        <div class="row">
          <h2>Olá, mamãe</h2>
          <h3>Esses são seus anúncios</h3>
          <div class="container cards">
              <div class="row">
                <!-- Card Projects -->
                  <div class="col-md-4">
                      <div class="card">
                          <div class="card-image">
                              <img class="img-responsive" src="images/item01.jpg">
                          </div>
                          <div class="card-content">
                            <h4>Vestido de bolinha</h4>
                              <p>Pouco usado e em ótimo estado. Tamanho M(3 anos)</p>
                              <p><b>Troca</b></p>
                          </div>
                          <div class="card-action">
                              <a href="#" >Finalizar</a>
                              <a href="#" >cancelar</a>
                              <a href="#" >editar</a>
                          </div>
                      </div>
                  </div>
                  <!-- Card Projects -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-image">
                                <img class="img-responsive" src="images/item02.jpg">
                            </div>
                            <div class="card-content">
                              <h4>Dinossauro de brinquedo</h4>
                                <p>Produto recomendado para crianças de 3 anos</p>
                                <p><b>Doação</b></p>
                            </div>
                            <div class="card-action">
                              <a href="#" >Finalizar</a>
                              <a href="#" >cancelar</a>
                              <a href="#" >editar</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Projects -->
                      <div class="col-md-4">
                          <div class="card">
                              <div class="card-image">
                                  <img class="img-responsive" src="images/item03.jpg">
                              </div>
                              <div class="card-content">
                                <h4>Fraldas de várias marcas</h4>
                                  <p>Tamanhos diversos</p>
                                  <p><b>Troca</b></p>
                              </div>
                              <div class="card-action">
                                <a href="#" >Finalizar</a>
                                <a href="#" >cancelar</a>
                                <a href="#" >editar</a>
                              </div>
                          </div>
                      </div>
              </div>
          </div>

        </div>
          </div>
          <br><br>
        </div>
      </div>
    </div>
  </main>
    <!-- Modal -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!--build:js js/main.min.js -->
    <script src="/js/menu.js"></script>
    <script src="/js/chat.js"></script>
    <!-- endbuild -->
  </body>
</html>
