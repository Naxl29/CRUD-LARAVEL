<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class personasController extends Controller
{
    public function create(){
        return view('personas.create');
    }

    public function read(){
        $personas = Personas::all();
        return view('personas.read', compact('personas'));
    }

    public function update(Request $request, Personas $persona){
        $request->validate([
            'nombre'=>'required|string|max:50'
            ]);

        $persona->update($request->all());

        return redirect()->back()->with('success', 'Persona actualizada con éxito');
    }

    public function delete(){
        $personas = Personas::all();
        return view('personas.delete', compact('personas'));
    }

    public function store(Request $request){
        $request->validate([
            'nombre'=>'required|string|max:50'
            ]);

        $persona = new Personas();
        $persona->nombre = $request->nombre;

        $persona->save();
        
        return redirect()->back()->with('success', 'Persona agregada con éxito');
    }

    public function destroy(Request $request){
        $id = $request->input('id_persona');
        $persona = Personas::find($id);
        if($persona){
            $persona->delete();
            return redirect()->back()->with('success', 'Persona eliminada con éxito');
        }else{
            return redirect()->back()->with('error', 'Persona no encontrada');
        }
    }

}
