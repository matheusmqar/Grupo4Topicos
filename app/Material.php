<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    //
    protected $fillable=['id','descricao','quantidade','minimo'];
	public $timestamps=false;
	public function getFornecedores(){
		return $this->belongsToMany('App\Fornecedor');
	}
}
