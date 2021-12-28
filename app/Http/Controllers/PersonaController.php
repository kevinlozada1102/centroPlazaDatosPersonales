<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::where('estado', true)->get();
        return view('personas.index')->with('personas', $personas);
    }

    public function registrado(){
        return view('personas.registrado');
    }


    public function create()
    {
        return view('personas.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'apellido'=>'required',
            'sexo'=>'required',
            'fechanac'=>'required | date_format:Y-m-d',
            'email'=>'required|unique:personas',
            'dni'=>'required|unique:personas|max:8 |min:8',
            'telefono'=>'required  | min:9 |max:9',
            'direccion'=>'required'
        ]);



        $persona = new Persona();

        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->sexo = $request->sexo;
        $persona->fechanac = $request->fechanac;
        $persona->email = $request->email;
        $persona->dni = $request->dni;
        $persona->telefono = $request->telefono;
        $persona->direccion = $request->direccion;


            $persona->save();
            return redirect()->route('personas.registrado', $persona)->with('mensaje','Se registro correctamente');
    }
    public function show($id)
    {

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
    public function destroy( $id)
    {
        $persona = Persona::find($id);
        $persona->estado=false;
        $persona->save();
        return redirect()->route('personas.index');
    }
}
