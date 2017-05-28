<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitacaoTroca extends Model
{
	protected $table = 'solicitacaoTroca';

	protected $fillable = ['idProduto', 'idSolicitante'];
}
