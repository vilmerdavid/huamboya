<?php

namespace App\Http\Controllers;

use App\Model\Categoria;
use Illuminate\Http\Request;

class Estaticas extends Controller
{
    public function documentos()
    {
        $nodes = Categoria::all()->toTree();
    	return view('estaticas.documentos',['categorias'=>$nodes]);
        
    }
}
