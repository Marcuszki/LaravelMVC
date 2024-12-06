<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class UsuariosController extends Controller
{
public function index()
{
    $usuarios = Usuarios::get();
       
    return view('usuarios.index', compact('usuarios'));
}





public function cadastro($id=null)
{
    $resultado = null;
    if($id){
        $resultado = Usuarios::find($id);
    }
        return view('usuarios.cadastro',compact('resultado'));
}




public function salvar(Request $request)
{
    if($request->id){
        $u = Usuarios::find($request->id);
    }else{
        $u = new Usuarios;
    }   
    $u->nome = $request->nome;
    $u->email = $request->email;
    $u->senha = $request->senha;
    $u->save();

   return redirect('/usuarios');


}



public function remover($id){

    $u = Usuarios::find($id);
    $u->delete();

    return redirect('/usuarios');
}




}