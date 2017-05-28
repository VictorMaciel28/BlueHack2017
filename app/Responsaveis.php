<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsaveis extends Model
{
    protected $table = 'responsaveis';

    protected $primaryKey = 'idResponsavel';

    protected $fillable = ['nome', 'email', 'senha', 'estado', 'cidade', 'bairro', 'sexo'];


    public function produtos(){
    	return $this->hasMany("App\Produtos", "idResponsavel", "idResponsavel");
    }

    public function filhos(){
    	return $this->hasMany("App\Filhos", "idResponsavel", "idResponsavel");
    }

    public function user(){
    	return $this->belongsTo("App\User", "idResponsavel", "idResponsavel");
    }
}
