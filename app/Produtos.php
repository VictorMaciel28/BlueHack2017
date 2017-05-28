<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Produtos extends Model
{	

	protected $table = 'produtos';
	protected $primaryKey = 'idProduto';

    protected $fillable = ['idProduto',
							'idResponsavel',
							'descricao',
							'imagem',
							'nome',
              'tipo',
              'sexo_alvo'];

	public function responsavel(){
		return $this->hasOne('App\Responsaveis', 'idResponsavel', 'idResponsavel');
	}

  public function getTipoAttribute($value){
      if($value == 1)
        return 'Doação';
      
      return 'Troca';      
  }

  public function getRelacionados($responsavel){
      $relacionados_arr = array();
      
      $relacionados_idade = array();
      foreach($responsavel->filhos as $filho){
          $idade = $filho->getIdade();

          $relacionados_idade = $this->select(DB::raw("*, '".$filho->nome."' as nome_filho"))
                                      ->where("idadeMin", ">=", $idade)
                                      ->where("idadeMax", "<=", $idade)
                                      ->get();
   
          $relacionados_sexo = $this->select(DB::raw("*, '".$filho->nome."' as nome_filho"))
                    ->where(function($query) use ($idade){
                    $query->where("sexo_alvo", '=', $idade)
                          ->orWhere("sexo_alvo", '=', 'unisex');
                })->get();

          $relacionados_lugar = $this->responsavel()->select(DB::raw("*, '".$filho->nome."' as 'nome_filho'"))
                                     ->first()
                                     ->where("cidade", "=", $responsavel->cidade)
                                     ->orWhere("bairro", "=", $responsavel->bairro)
                                     ->orWhere("estado", "=", $responsavel->estado)
                                     ->get();


          /*if(count($relacionados) > 0){
            $relacionados->each(function($el){
                $el->nome_filho = $filho->nome;
            });

            $relacionados_arr[$filho->nome] = $relacionados;*/
      }

      if(!is_array($relacionados_idade)){
        return $relacionados_idade->union($relacionados_sexo->union($relacionados_lugar))->unique();
      } else {
         return $this->limit(10)->get();
      }
  }

}


/** 

CREATE TABLE IF NOT EXISTS `mydb`.`Produto` (
  `idProduto` INT NOT NULL,
  `idTroca` INT NOT NULL,
  `idCadastro` INT NOT NULL,
  `descricao` VARCHAR(150) NULL,
  `imagem` VARCHAR(100) NULL,
  PRIMARY KEY (`idProduto`),
  INDEX `fk_Produto_Troca1_idx` (`idTroca` ASC),
  INDEX `fk_Produto_Cadastro1_idx` (`idCadastro` ASC),
  CONSTRAINT `fk_Produto_Troca1`
    FOREIGN KEY (`idTroca`)
    REFERENCES `mydb`.`Troca` (`idTroca`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Produto_Cadastro1`
    FOREIGN KEY (`idCadastro`)
    REFERENCES `mydb`.`Cadastro` (`idCadastro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
**/