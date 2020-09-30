<?php

namespace App\Http\Controllers;

use App\Model\Categoria;
use App\Model\Documento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class Documentos extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
	}
	
    public function index()
    {
        $nodes = Categoria::all()->toTree();
    	return view('documentos.index',['categorias'=>$nodes]);
    }

    public function guardar(Request $request)
    {
        $pa=Categoria::find($request->input('id'));
    	if ($pa) {
    		$pn=new Categoria;
    		$pn->nombre=$request->input('nombre');
    		$pn->appendToNode($pa)->save();
    	}else{
    		$pn=new Categoria;
    		$pn->nombre=$request->input('nombre');
    		$pn->makeRoot()->save();
    	}

        $data=array('msjProceso'=>'Categoría '.$pn->nombre.' creado exitoso','idProceso'=>$pn->id);
        $request->session()->flash('procesoOk', $data);
    	return redirect()->route('documentosAdmin');
	}
	
	public function eliminar(Request $request,$idCat)
	{
		try {
			DB::beginTransaction();
			$cat=Categoria::findOrFail($idCat);
			
			
			foreach ($cat->documentos as $doc) {
				Storage::delete($doc->url);
				$doc->delete();
			}

			$cat->delete();
			$request->session()->flash('success','Categoría eliminado');
			
			DB::commit();
		} catch (\Throwable $th) {
			DB::rollback();
			$request->session()->flash('info','Categoría no eliminado');
		}
		return redirect()->route('documentosAdmin');
		
	}

	public function actualizar(Request $request)
	{
		$pro=Categoria::findOrFail($request->input('idproceso'));
        
		$pro->nombre=$request->input('nombreProceso');
		$pro->save();
		$data=array('msjProceso'=>'Categoría '.$pro->nombre.' actualizado exitoso','idProceso'=>$pro->id);
		$request->session()->flash('procesoOk', $data);
		return redirect()->route('documentosAdmin');

	}

	public function guardarArchivo(Request $request)
	{
		$doc=new Documento();
		$doc->nombre=$request->file('archivo')->getClientOriginalName();
		$doc->categoria_id=$request->categoria_id;
		$doc->save();

		if ($request->hasFile('archivo')) {
            if ($request->file('archivo')->isValid()) {
                $extension = $request->archivo->extension();
               
                $path = Storage::putFileAs(
                    'public/documentos', $request->file('archivo'), Str::slug($doc->nombre, '_').'_'.$doc->id.'.'.$extension
                );
                $doc->url=$path;
                $doc->save();
            }
		}
		
		$request->session()->flash('success', 'Documento guardado');
		return redirect()->route('documentosAdmin');

	}

	public function eliminarDoc(Request $request,$idDoc)
	{
		$doc=Documento::findOrFail($idDoc);
		try {
			DB::beginTransaction();
			$doc->delete();
			Storage::delete($doc->url);
			DB::commit();
			$request->session()->flash('success', 'Documento eliminado');
		} catch (\Throwable $th) {
			DB::rollback();
			$request->session()->flash('info', 'Documento no eliminado');
		}
		
		return redirect()->route('documentosAdmin');
	}
}
