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
            'email'=>'required',
            'dni'=>'required |max:8',
            'telefono'=>'required |max:9',
            'direccion'=>'required'
        ]);



        $persona = new Persona();

        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->email = $request->email;
        $persona->dni = $request->dni;
        $persona->telefono = $request->telefono;
        $persona->direccion = $request->direccion;

        $persona->save();
        return redirect()->route('personas.index', $persona)->with('mensaje','Se registro correctamente');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
