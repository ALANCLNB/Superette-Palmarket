<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Hash;//incriptar contrase;as
use Illuminate\Support\Facades\DB;
use App\User,Role,Sucursale;//modelo al que se va a referir

class UsuariosController extends Controller
{
    
    //
    public function __construct(){
        $this->middleware('auth');

    }



   public function index()
   {
        $usuarios = \DB::table('users')
        ->where('created_at', '>=', now()->subDays(7))
        ->select('users.*')
        ->orderBy('id','DESC')
        ->get();


        $rol = DB::table('roles')
        ->select('roles.*')
        ->orderBy('descripcion','DESC')
        ->get();

        $sucursal = DB::table('sucursales')
        ->select('sucursales.*')
        ->orderBy('nombre','DESC')
        ->get();

       return view('dashboard.usuarios.usuarios',compact('usuarios','rol','sucursal'));//'usuarios,variable,variable' para poner varis variables a enviar
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
                'rol' => 'required|min:1|max:5',
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

    public function destroy($id)
    {
        //dd($id);
        $Duser = User::find($id);

        $Duser->delete();
        return back()->with('Listo','El usuario fue eliminado con exito.');
    } 


}
