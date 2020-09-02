<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Cupone,Categoria;

class CuponesController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $cupon = \DB::table('cupones')
        //->where('created_at', '>=', now()->subDays(7))
        //->join('users','users.id','=','sucursales.id_user')
        ->select('cupones.*')
        ->orderBy('id','DESC')
        ->get();

        $categoria = DB::table('categorias')
        ->select('categorias.*')
        ->orderBy('descripcion','DESC')
        ->get();

       return view('dashboard.cupones.cupones',['cupon'=>$cupon , 'categoria' => $categoria]);

       //return view('dashboard.categorias.categorias', compact('cate'));

    }

    public  function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
                'id_user' => 'required|min:1|max:5',
                'codigo' => 'required|min:3|max:80',
                'descripcion' => 'required|min:3|max:80',
                'id_categoria' => 'required|min:1|max:3'

        ]);

        if($validator -> fails()){
            //dd('Llena todos los campos');
            return back()
            ->withInput()
            ->with('ErrorInsert', 'Favor de llenar todos los campos')
            ->withErrors($validator);

        }else{
            //dd('Guardado'.$request->nombre);
            $cupones = Cupone::create([
                'id_user' => $request->id_user,
                'codigo' => $request->codigo,
                'descripcion' => $request->descripcion,
                'id_categoria' => $request->id_categoria
                

            ]);
            
            return back()
            ->with('Listo', 'Se ha insertado el cupon correctamente');
           
        }
    }

    public function destroy($id)
    {
        //dd($id);
        $borrar = Cupone::find($id);

        $borrar->delete();
        return back()->with('Listo','El cupon fue eliminada con exito.');
    }
}
