<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Responsaveis;
use App\User;
use App\Filhos;
use App\Produtos;

class ResponsaveisController extends Controller
{
    
    public function login(Request $request){
    	return view("login");
    }

    public function register(Request $request){
    	return view("cadastro");
    }

    public function makeRegister(Request $request){

    	$responsavel = Responsaveis::create([
    			'nome'=> $request->nome,
    			'sobrenome'=> $request->sobenome,
    			'email'=> $request->email,
    			'senha'=> $request->senha,
    			'estado'=> $request->estado,
    			'bairro'=>$request->bairro,
    			'cidade'=>$request->cidade,
    			'sexo'=>$request->sexo
    		]);

    	Filhos::create([
    			"nome"=>$request->nome_filho,
    			"altura"=>$request->altura,
    			"peso"=>$request->peso,
    			"tamanho_pe"=>$request->tamanho_pe,
    			"tamanho_fralda"=>$request->tamanho_fralda,
    			"tamanho_roupa"=>$request->tamanho_roupa,
                "idResponsavel"=>$responsavel->id
    		]);

    	User::create([
    			'name'=> $request->nome,
    			'email'=> $request->email,
    			'password'=> bcrypt($request->password),
                'idResponsavel'=> $responsavel->idResponsavel
    		]);

    	return redirect()->route("/");
    }

    public function makeLogin(Request $request){

        try{
            $user = User::where("email", $request->email)->first();
        }catch (Exception $e){
            $user = User::first();
        }

        Auth::login($user);

        return redirect()->route("/");
    }


}
