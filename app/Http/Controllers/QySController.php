<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Comentario;//modelo al que se va a referir

class QySController extends Controller
{
   
    
    public function index()
    {

        $qysug = \DB::table('comentarios')
        ->select('comentarios.*')
        ->orderBy('created_at','DESC')
        ->get();

       return view('dashboard.qys.qys')->with('qysug',$qysug);


        //return view('dashboard.qys.qys');
    }
    
    public  function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
                'id_user' => 'required|min:1|max:5',
                'email' => 'required|min:3|max:50|email',
                'contenido' => 'required|min:3|max:250',
                'tipo' => 'required|min:1|max:50',
                'sucursal' => 'required|min:1|max:5'

        ]);

        if($validator -> fails()){
            //dd('Llena todos los campos');
            return back()
            ->withInput()
            ->with('ErrorInsert', 'Favor de llenar todos los campos')
            ->withErrors($validator);

        }else{
            //dd('Guardado'.$request->nombre);
            $qys = Comentario::create([
                'id_user' => $request->id_user,
                'email' => $request->email,
                'contenido' => $request->contenido,
                'tipo' => $request->tipo,
                'sucursal' => $request->sucursal

            ]);
            return back()
            ->with('Listo', 'Se ha insertado correctamente');
           
        }
    }


}
