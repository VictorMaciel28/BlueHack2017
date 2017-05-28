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
    <link rel="stylesheet" href="/css/inserir-produto.css">
    <link rel="stylesheet" href="/css/input-file.css">

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
                				<a href="#blog" class="animate">
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
    <div class="section inserir-produto">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <h3 class="text-center">Inserir Produto</h3>
            <br>
            <form class="" action="{{route('produtos.store')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
    
              <div class="form-group">
                <input type="text" class="form-control" name="nome" placeholder="Qual produto deseja inserir?">
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="5" id="comment" name="descricao" placeholder="Diga alguns detalhes sobre o produto"></textarea>
              </div>
              <div class="form-group">
               <select name="tipo" class="form-control" id="sel1">
                 <option disabled selected>Qual a finalidade do produto?</option>
                 <option value="0">Troca</option>
                 <option value="1">Doação</option>
               </select>
               <br>
                <select name="sexo_alvo" class="form-control" id="sel1">
                 <option disabled selected>Público alvo</option>
                 <option value="menino">Menino</option>
                 <option value="menina">Menina</option>
                 <option value="unisex">Unisex</option>
               </select>
               <br>
               <div class="form-group">
                 <!-- image-preview-filename input [CUT FROM HERE]-->
              <div class="input-group image-preview">
                  <input type="text" class="form-control image-preview-filename" disabled="disabled">
                   <!-- don't give a name === doesn't send on POST/GET -->
                  <span class="input-group-btn">
                      <!-- image-preview-clear button -->
                      <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                          <span class="glyphicon glyphicon-remove"></span> Remover
                      </button>
                      <!-- image-preview-input -->
                      <div class="btn btn-default image-preview-input">
                          <span class="glyphicon glyphicon-folder-open"></span>
                          <span class="image-preview-input-title">Escolher imagem</span>
                          <input type="file" accept="image/png, image/jpeg, image/gif" name="imagem"/> <!-- rename it -->
                      </div>
                  </span>
              </div>
              <!-- /input-group image-preview [TO HERE]-->
               </div>
              </div>
              <br>
              <button class="cadastro-button" type="submit" class="btn">Cadastrar</button>
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
    <!-- <script src="/js/input-file.js"></script> -->
    <!-- endbuild -->
  </body>
</html>
