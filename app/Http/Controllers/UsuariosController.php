<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;//modelo al que se va a referir
use Hash;//incriptar contrase;as

class UsuariosController extends Controller
{
    //

   public function index()
   {
       return view('dashboard.usuarios.usuarios');
   } 

    public  function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
                'nombre' => 'required|min:3|max:50',
                'apellidos' => 'required|min:3|max:50',
                'email' => 'required|min:3|max:50|email',
                'pass1' => 'required|min:3|max:50|required_with:pass2|same:pass2',
                'pass2' => 'required|min:3|max:50',
                'imagen' => 'required|min:3|max:50',
                'rol' => 'required|min:3|max:50',
                'sucursal' => 'required|min:3|max:50'

        ]);

        if($validator -> fails()){
            //dd('Llena todos los campos');
            return back()
            ->withInput()
            ->with('ErrorInsert', 'Favor de llenar todos los campos')
            ->withErrors($validator);

        }else{
            //dd('Guardado'.$request->nombre);
            $usuario = User::create([
                'nombre' => $request->nombre,
                'apellidos' => $request->apellidos,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'imagen' => $request->imagen,
                'rol' => $request->rol,
                'sucursal' => $request->sucursal

            ]);
            return back()
            ->with('Listo', 'Se ha insertado correctamente');
           
        }
    }


}
