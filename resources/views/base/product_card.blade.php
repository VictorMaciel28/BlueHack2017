<div class='col-md-4'>
 <div class="card">
    <div class="card-image">
        <img class="img-responsive" src="http://material-design.storage.googleapis.com/publish/v_2/material_ext_publish/0Bx4BSt6jniD7TDlCYzRROE84YWM/materialdesign_introduction.png">
    </div>
    <div class="card-content">
            <h4>{{$product->nome}}</h4>
            <p>{{ strlen($product->descricao) > 45 ? substr($product->descricao, 0, 42). '...' : $product->descricao}}</p>
            <p>{{$product->tipo}}</p>
    </div>
    <div class="card-action">
            <a href="#" target="new_blank">{{$product->nome_filho}} quer</a>
        </div>
    </div>
</div>