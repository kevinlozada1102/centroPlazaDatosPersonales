<?php

namespace App\Http\Controllers;

use App\Models\Publicidad;
use Illuminate\Http\Request;

class PublicidadController extends Controller
{
    public function index(){
        return view('publicidad.index');
    }

    public function create()
    {
        return view('publicidad.lista');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'fechainicio'=>'required',
            'fechafinal'=>'required',
            'asunto'=>'required',
            'contenido'=>'required'
        ]);



        $publicidad = new Publicidad();

        $publicidad->nombre = $request->nombre;
        $publicidad->fechainicio = $request->fechainicio;
        $publicidad->fechafinal = $request->fechafinal;
        $publicidad->asunto = $request->asunto;
        $publicidad->contenido = $request->contenido;

        $publicidad->save();
        return redirect()->route('publicidad.index', $publicidad)->with('mensaje', 'Se registro correctamente');
    }

    public function destroy($id){
        $publicidad = Publicidad::find($id);

        $publicidad->delete();
        return redirect()->route('publicidad.index');

    }

}
