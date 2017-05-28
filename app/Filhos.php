<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filhos extends Model
{
    protected $fillable = ['nome', 'idade', 'peso', 'sexo', 'tamanho_pe', 'altura', 'tamanho_fralda', 'tamanho_roupa'];

    public function filhos(){
    	return $this->hasOne('App\Responsaveis', 'idResponsavel', 'idResponsavel');
    }    

    public function getSexoAttribute($value){
    	if($value == "M")
    		return 'masculino';

    	return 'feminino';
    }	

    public function getIdade(){
      $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
      $idade = floor((((($hoje - $this->data_nascimento) / 60) / 60) / 24) / 365.25);

      return $idade;
    }
}
