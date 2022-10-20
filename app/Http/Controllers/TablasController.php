<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuarios;
use App\Models\Tiendas;
use App\Models\Productos;
use App\Models\Tipos;
use App\Http\Requests\validar;


class TablasController extends Controller
{
    public function usuarios()
    {
        $usuarios_a = Usuarios::all();
        $usuarios_b = \DB::select('SELECT * FROM tb_usuarios');
        return view("lista_usuarios")
        -> with(['usuarios1' => $usuarios_a])
        -> with(['usuarios2' => $usuarios_b]);
    
}

public function borrar_usuarios(Usuarios $id){

    \Storage::disk('local')->delete($id->foto);//bay foto del usuario
   $id->delete();
   return redirect()->route("lista_usuarios");

}
public function detalle_usuarios($id){
    $usuario = Usuarios::find($id);
    return view("detalle_usuarios")
    ->with(['detalle_usuarios' => $usuario]);
}
public function editar_usuarios(Usuarios $id){

    $tipo = Tipos::all();
return view("editar_usuarios")
->with(['usuarios' => $id]) 
->with(['nivel' => $tipo]);
}

public function alta_usuarios(){
    $tipo = Tipos::all();
    return view("alta_usuarios")
    ->with(['tipos' => $tipo]);
}

public function ingresas(validar $request){
    ///******************VALIDA CAMPOS **************** */
//
 //USUARIOS CEREATE
 Usuarios::create(array(
    'nombre' => $request->input('nombre'),
    'app' => $request->input('app'),
    'ap' => $request->input('ap'),
    'edad' => $request->input('edad'),
    'genero' => $request->input('gen'),
    'foto' => $request->input('foto'),
    'activo' => $request->input('activo'),      
     'activo' =>'1'
 ));
 return redirect()->route('lista_usuarios');

}
public function salvar_usuarios(Usuarios $id, Request $request){
    $query = Usuarios::find($id->id_usuario);
    $query->nombre = trim(  $request->nombre);
    $query->app = trim(  $request->app);
    $query->ap = trim(  $request->ap);
    $query->edad =  $request->fn;
    $query->genero =   $request->gen;  
    $query->foto = trim(  $request->foto);
    $query->activo = 1;
    $query->save();
    return redirect()->route("editar_usuarios", ['id' => $id->id_usuario]);

}

public function tipos()
{
    $tipos_a = Tipos::all();
    $tipos_b = \DB::select('SELECT * FROM tb_tipos');
    return view("lista_tipos")
    -> with(['tipos1' => $tipos_a])
    -> with(['tipos2' => $tipos_b]);
}
public function tiendas()
{
    $tiendas_a = Tiendas::all();
    $tiendas_b = \DB::select('SELECT * FROM tb_tiendas');
    return view("lista_tiendas")
    -> with(['tiendas1' => $tiendas_a])
    -> with(['tiendas2' => $tiendas_b]);
}
public function productos()
{
    $produc_a = Productos::all();
    $produc_b = \DB::select('SELECT * FROM tb_productos');
    return view("lista_productos")
    -> with(['productos1' => $produc_a])
    -> with(['productos2' => $produc_b]);
}
}

