<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{

    public function index()
    {
        //pagina de inicio
        $datos = Personas::orderBy('paterno', 'desc')->paginate(10);
        return view('inicio', compact('datos'));
    }

    public function create()
    {
        //formulario donde agregaremos datos
        return view('agregar');
    }

    public function store(Request $request)
    {
        //guarda los datos en la bd
        $personas = new Personas();
        $personas->nombre = $request->post('nombre');
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();
        return redirect()->route("personas.index")->with("success", "Agregado con exito!");
    }

    public function show($id)
    {
        //obtiene para obtener un registro de la tabla
        $personas = Personas::find($id);
        return view('eliminar', compact('personas'));
    }

    
    public function edit($id)
    {
        //trae los datos a editar, colocandolos en un formulario
        $personas = Personas::find($id);
        return view('actualizar', compact('personas'));
    }

    public function update(Request $request, $id)
    {
        //actualiza los datos en la bd
        $personas = Personas::find($id);
        $personas->nombre = $request->post('nombre');
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();
        return redirect()->route("personas.index")->with("success", "Actualizado con exito!");
    }

    public function destroy($id)
    {
        //destruye un registro
        $personas = Personas::find($id);
        $personas->delete();
        return redirect()->route("personas.index")->with("success", "Eliminado con exito!");
    }
}
