<?php

namespace App\Http\Controllers;
use App\Models\Viajero;
use Illuminate\Http\Request;

class ViajeroController extends Controller
{
    public function listar(){
        
        $viajeros = Viajero::orderBy('id', 'desc')->get();
        return view('viajeros.listarviajero', compact('viajeros'));
}
    
public function create(){ 
        
    {
        $viajeros = Viajero::orderBy('id', 'desc')->get();
        return view('viajeros.createviajero', compact('viajeros'));
    }
}

    public function store(Request $request){ 
        
    $viajero= new Viajero();//lo verde es el nombre del modelo y creo una variable $book
    $viajero->nombre=$request->nombre;//aca va los atributos como coloco en la migracion 
    $viajero->dni=$request->dni;
    $viajero->direccion=$request->direccion;
    $viajero->telefono=$request->telefono;
    $viajero->save();
    return $viajero;
    
 
}

    public function edit(Viajero $viajero){//lo verde es el model y lo otro es la variable book en singular
    return view('viajeros.editviajero',compact('viajero')); //aca entro a la carpeta libro y despues va el nombre del archivo editar que esta en views
}
    public function update(Request $request,Viajero $viajero){ 
            
    $viajero->nombre=$request->nombre;
    $viajero->dni=$request->dni;
    $viajero->direccion=$request->direccion;
    $viajero->telefono=$request->telefono;
    
    $viajero->save();
 
    return redirect()->route('viajero.listar'); 
 
  }

public function destroy(Viajero $viajero){
        
    $viajero->delete();
    
    return redirect()->route('viajero.listar');
}

}
