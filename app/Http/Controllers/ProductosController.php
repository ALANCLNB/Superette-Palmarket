<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Producto;//modelo al que se va a referir
class ProductosController extends Controller
{

  

    public function index()
    {
        $prod = DB::table('productos')
        ->join('users','users.id','=','productos.id_user')
        ->join('categorias','categorias.id','=','productos.categoria')
        ->select('productos.*',
        'users.nombre as Usernombre',
        'categorias.descripcion as Cateid')
        ->orderBy('id','ASC')
        ->get();


       // $productos = \DB::table('productos')
        //->where('created_at', '>=', now()->subDays(7))
       // ->select('productos.*')
       // ->orderBy('id','DESC')
        //->get();

       return view('dashboard.productos.productos',['prod' => $prod]);
        //return view('dashboard.productos.productos');
    }
   


    public  function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
                'nombre' => 'required|min:3|max:50',
                'categoria' => 'required|min:1|max:3',
                'marca' => 'required|min:3|max:50',
                'precio' => 'required|min:4|max:10',
                'imagen' => 'required|min:3|max:100',
                //'precio_ant' => 'required|min:5|max:50',
                'stock' => 'required|min:1|max:5'
                //'id_user' => 'required|min:1|max:5'

        ]);

        if($validator -> fails()){
            //dd('Llena todos los campos');
            return back()
            ->withInput()
            ->with('ErrorInsert', 'Favor de llenar todos los campos')
            ->withErrors($validator);

        }else{
            //dd('Guardado'.$request->nombre);
            $productos = Producto::create([
                'nombre' => $request->nombre,
                'categoria' => $request->categoria,
                'marca' => $request->marca,
                'precio' => $request->precio,
                'imagen' => $request->imagen,
                'stock' => $request->stock,
                'precio_ant' =>15.20,
                'id_user' => 1

            ]);
            
            return back()
            ->with('Listo', 'Se ha insertado el producto correctamente');
           
        }
    }

    public function destroy($id)
    {
        //dd($id);
        $Dprod = Producto::find($id);

        $Dprod->delete();
        return back()->with('Listo','El producto fue eliminado con exito.');
    } 


}
