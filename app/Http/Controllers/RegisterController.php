<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario; 

class RegisterController extends Controller
{

    //funcion para guardar datos en la base de datos

    public function store(Request $request){

        $this->validate($request, [
            'nombre'=>'required', 
            'cedula'=>'required',
            'telefono'=>'required',
            'direccion'=>'required'
        ]);


        usuario::create([
            'nombre'=>$request->nombre, 
            'cedula'=>$request->cedula,
            'telefono'=>$request->telefono, 
            'direccion'=>$request->direccion, 
        ]); 

        return view('welcome'); 
    }


        //Funcion para buscar por id o cedula.  

        public function show(){
            $usuario=usuario::all();
    
            $listadoUsers= "   Holaaaaaaaaaaa ";       
    
            return $listadoUsers; 
        }

        


 
}
