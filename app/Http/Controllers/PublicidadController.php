<?php

namespace App\Http\Controllers;

use App\Models\Publicidad;
use Illuminate\Http\Request;

class PublicidadController extends Controller
{
    public function index(){
        $publicidad = Publicidad::where('estado', true)->get();
        return view('publicidad.lista')->with('publicidad' , $publicidad);
    }

    public function create()
    {
        return view('publicidad.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'nombre'=>'required',
            'fechainicio'=>'required',
            'fechafinal'=>'required',
            'asunto'=>'required',
            'contenido'=>'required',
            'imagen'=>'required'
        ]);



        $publicidad = new Publicidad();

        if ($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $destinationPath = 'img/publicidad/';
            $filename= time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('imagen')->move($destinationPath,$filename);
            $publicidad->imagen = $destinationPath . $filename;
        }

        $publicidad->nombre = $request->nombre;
        $publicidad->fechainicio = $request->fechainicio;
        $publicidad->fechafinal = $request->fechafinal;
        $publicidad->asunto = $request->asunto;
        $publicidad->contenido = $request->contenido;

        $publicidad->save();
        return redirect()->route('publicidad.create', $publicidad)->with('mensaje', 'Se registro correctamente');
    }

    public function destroy($id){
        $publicidad = Publicidad::find($id);
        $publicidad ->estado=false;
        $publicidad->save();
        return redirect()->route('publicidad.index');

    }

}
