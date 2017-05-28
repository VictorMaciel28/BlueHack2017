<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;
use DB;
use Auth;
class ProductController extends Controller
{
    

    /*public function procuraProduto(Request $request){

    	$palavra_chave = $request->palavra_chave;

    	Produtos::where("nome", 'like', DB::raw('%'.$palavra_chave.'%'));

    }*/


    public function search(Request $request){
    	$status = 1;

    	$produtos = Produtos::where('nome', 'like', '%'.$request->palavra_chave.'%')->distinct()->get();

    	if(count($produtos) < 1){
    		$status = -1;
    	}

    	return json_encode(["status"=>$status, "data"=>$produtos->toJson()]);
    }

    public function create(Request $request){
        return view("inserir_produto");
    }

    public function store(Request $request){

        $imagem = $request->file('imagem');

        $nome_imagem = $imagem->getClientOriginalName();

        $imagem->move("/var/www/html/app_mamae/storage/imagens");

        $responsavel = Auth::User()->responsavel()->first();

        Produtos::create(['descricao'=>$request->descricao,
                            'imagem'=>$nome_imagem,
                            'nome'=>$request->nome,
                            'tipo'=>$request->tipo,
                            'sexo_alvo'=>$request->sexo_alvo,
                            'idResponsavel'=>$responsavel->idResponsavel]);

        return redirect()->route('/');

    }

    public function anuncios(){
        return view("meus_anuncios");
    }
}
