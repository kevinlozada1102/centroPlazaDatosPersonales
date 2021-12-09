<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
       $personas = Persona::all();
        return view('personas.index')->with('personas', $personas);
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
            'fechanac'=>'required',
            'email'=>'required|unique:personas',
            'dni'=>'required |max:8 |min:8',
            'telefono'=>'required | min:9 |max:9',
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
        return redirect()->route('personas.create', $persona)->with('mensaje','Se registro correctamente');
    }

    public function show($id)
    {
        //
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

        $persona->delete();
        return redirect()->route('personas.index');
    }
}
