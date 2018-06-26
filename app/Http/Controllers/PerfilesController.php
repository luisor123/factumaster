<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfil;
class PerfilesController extends Controller
{
    public function index()
    {
        $perfiles =Perfil::all();
        return view('perfiles.index',compact('perfiles'));
    }
    //LLamar la vista encargada de crear un nuevo perfil
    public function create()
    {
        return view('perfiles.crear');
    }
    //Recibir los datos y guardalos en la tabla de perfiles
    public function store(Request $request)
    {
        //Validar la informacion 
        $this->validate($request,[
            'nombre'=>'required|unique:perfiles'
        ]);
        //Guardar la informaciòn en la tabla
        $perfil = Perfil::create([
            'nombre'=> $request-> get('nombre')
        ]);
        return redirect()->route('perfiles.index');
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

    public function destroy($id)
    {
        //
    }
}
