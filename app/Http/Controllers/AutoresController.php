<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\autores;

class AutoresController extends Controller
{
public function index()
{
    $autores = Autores::get();
       
    return view('autores.index', compact('autores'));
}





public function cadastro($id=null)
{
    $resultado = null;
    if($id){
        $resultado = Autores::find($id);
    }
        return view('autores.cadastro',compact('resultado'));
}




public function salvar(Request $request)
{
    if($request->id){
        $u = Autores::find($request->id);
    }else{
        $u = new Autores;
    }   
    $u->nome = $request->nome;
  
    $u->save();

   return redirect('/autores');


}



public function remover($id){

    $u = Autores::find($id);
    $u->delete();

    return redirect('/autores');
}




}