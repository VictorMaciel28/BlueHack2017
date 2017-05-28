<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Troca extends Model
{
    protected $fillable = ['idTroca', 'data', 'situacao', 'idSolicitante', 'idDono'];
    protected $primaryKey = 'idTroca';

    public function products(){
    	return $this->hasMany("App\Products", 'idProduto', 'id');
    }

   	public function responsavelDono(){
   		return $this->hasOne('App\Responsaveis', 'idDono', 'idResponsavel');
   	}

   	public function responsavelSolicitante(){
   		return $this->hasOne('App\Responsaveis', 'idSolicitante' ,'idResponsavel');
   	};
}
