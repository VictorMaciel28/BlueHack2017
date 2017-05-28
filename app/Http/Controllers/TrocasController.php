<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Troca;

class TrocasController extends Controller
{
  	/* `idTroca` INT NOT NULL,
  	`idFilho` INT NOT NULL,
  	`idMamae` INT NOT NLL,
  	`data` DATE NULL, */

	public function create(Request $request){
		Troca::create(['idMamae'=>$request->mae,
						'data'=> (new \DateTime::format('Y-m-d'))]);
	}

   	public function createSolicitacao(Request $request){

   		SolicitacoesTroca::create(['idSolicitante'=>$request->solicitante,
   									'idProduto'=>$produto,
   									'situacao'=>0
   								  ]);

   	}

   	public function cancelaTroca(Request $request){
   		$troca = Troca::find($request->troca);
   		
   		$troca->update(['situacao'=>-1]);
   	}

   	
   	
}
