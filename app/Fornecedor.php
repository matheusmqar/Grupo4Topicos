<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    //
    
	protected $fillable=['id','cnpj','razao','telefone','email'];
	public $timestamps=false;
	public function getMateriais() {
		return $this->belongsToMany('App\Material');
	}
}
