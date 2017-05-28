$(function(){
	console.log($("#form_procura"));

	$("#form_procura").on("submit", function(ev){
		ev.preventDefault();

	var container = $('.cards .row').empty();

	container.append($("<center><img class='loading' src='/default.gif'></img></center>"));
	var palavra_chave = $("input[name=pesquisa]").val();
	$.get("/search", {palavra_chave:palavra_chave}, function(resp){
			resp = JSON.parse(resp);
			if(resp.status !== 1){
				container.append($("<center><h2>Nenhum resultado foi encontrado.</h2></center>"));
			} else if(resp.status == -1){
				container.append($("<center><h2>Nenhum resultado foi encontrado.</h2></center>"));
			} 
			else {
				var data = JSON.parse(resp.data);
				for(var i =0; i< data.length; i++){
					var item = data[i];

						var card = "<div class='col-md-4'>"+
									" <div class='card'>"+
									"    <div class='card-image'>"+
									"        <img class='img-responsive' src='http://material-design.storage.googleapis.com/publish/v_2/material_ext_publish/0Bx4BSt6jniD7TDlCYzRROE84YWM/materialdesign_introduction.png'>"+
									"    </div>"+
									"    <div class='card-content'>"+
									"            <h4>"+item.nome+"</h4>"+
									"            <p>"+item.descricao+"</p>"+
									"            <p>"+item.tipo+"</p>"+
									"    </div>"+
									"    <div class='card-action'>"+
									"            <a href='#' target='new_blank'> Entrar em contato </a>"+
									"        </div>"+
									"    </div>"+
									"</div>";

					container.append(
						$(card)
					);
				}
			}
			container.find(".loading").remove();
		});
	})
})