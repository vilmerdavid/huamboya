<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Categoria extends Model
{
    use NodeTrait;

    public function hijos() {
        return $this->hasMany('App\Model\Categoria','parent_id') ;
    }

    public function documentos() {
        return $this->hasMany(Documento::class) ;
    }
}
