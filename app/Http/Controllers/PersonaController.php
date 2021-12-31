<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonaController extends Controller
{
    public function index(Request $request)
    {
        $texto = trim($request -> get('texto')) ;
        $personas = DB::table('personas')
                    ->select('id','nombre','apellido','email','sexo','fechanac','dni','telefono','direccion','estado')
                    ->where('nombrecompleto','LIKE','%'.$texto.'%')
                    ->orWhere('apellido','asc')
                    ->paginate(5);
       // dd($personas);
        return view('personas.lista', compact('personas','texto')) ;
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
            'fechanac'=>'required ',
            'email'=>'required|unique:personas',
            'dni'=>'required|unique:personas|max:8 |min:8',
            'telefono'=>'required  | min:9 |max:9',
            'direccion'=>'required'
        ]);



        $persona = new Persona();

        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->nombrecompleto = $request->apellido." ".$request->nombre;
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

    public function activar ($id)
    {

    }

    public function update( $id)
    {
        $persona =   Persona::find($id);
        $persona->estado=true;
        $persona->save();
        return redirect()->route('personas.index');
    }

    public function destroy( $id)
    {
        $persona = Persona::find($id);
        $persona->estado=false;
        $persona->save();
        return redirect()->route('personas.index');
    }
}
