<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Sucursale;
use Illuminate\Support\Facades\DB;


class SucursalesController extends Controller
{

    
    
    public function index()
    {
        $sucu = \DB::table('sucursales')
        ->select('sucursales.*')
        ->orderBy('id','DESC')
        ->get();

       return view('dashboard.sucursales.sucursales', compact('sucu'));
       
      //dd($sucu);
       //return view('dashboard.categorias.categorias', compact('cate'));

    }
/*
    public  function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
                'nombre' => 'required|min:3|max:30',
                'direccion' => 'required|min:3|max:80'

        ]);

        if($validator -> fails()){
            //dd('Llena todos los campos');
            return back()
            ->withInput()
            ->with('ErrorInsert', 'Favor de llenar todos los campos')
            ->withErrors($validator);

        }else{
            //dd('Guardado'.$request->nombre);
            $sucursales = Sucursale::create([
                'nombre' => $request->nombre,
                'direccion' => $request->direccion
                

            ]);
            
            return back()
            ->with('Listo', 'Se ha insertado la sucursal correctamente');
           
        }
    }

    public function destroy($id)
    {
        //dd($id);
        $borrar = Sucursale::find($id);

        $borrar->delete();
        return back()->with('Listo','La sucursal fue eliminada con exito.');
    }
    */
}