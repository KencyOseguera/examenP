<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Asiento;

class AsientoController extends Controller
{
    //
    public function ver(){
        $asientos = Asiento::all();
        return view('tiposAsientos', compact('asientos'));
    }

    public function eliminar($id){
        $elim = Asiento::find($id);
        return view('tiposAsientos', compact('elim'));
    }

    public function destroy($id){
        $elim = Asiento::find($id);
        $elim->delete();
        
        return redirect('/tipoAsientos');
    }

    public function agregarTipoAsiento(){
        return view('agregarTipoAsiento');
    }

    public function guardar(Request $request){
        $nvoTipoAsiento = new Asiento();
        $nvoTipoAsiento->descripcion = $request->input('descripcion');
        $nvoTipoAsiento->precio = $request->input('precio');
        $nvoTipoAsiento->estado = $request->input('estado');
        $nvoTipoAsiento->save();

        return redirect('/tipoAsientos'); 
    }

    public function editar($id){
        $edi = Asiento::find($id);
        return view('editarAsiento');
    }

    



}