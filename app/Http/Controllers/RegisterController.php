<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario; 

class RegisterController extends Controller
{

    public function index(){

        $infoUsers=Usuario::all(); 

        return View('welcome', compact('infoUsers')); 
    }

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


}
