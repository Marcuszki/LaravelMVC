<?php
namespace App\Http\Controllers;

use App\Models\Livros;
use App\Models\Autores;
use Illuminate\Http\Request;


class LivrosController extends Controller
{
public function index()
{
    $livros = Livros::get();
       
    return view('livros.index', compact('livros'));
}





public function cadastro($id=null)
{
    $resultado = null;
    if($id){
        $resultado = Livros::find($id);
    }

    $autores = Autores::get();
        return view('livros.cadastro',compact('resultado','autores'));
}




public function salvar(Request $request)
{
    if($request->id){
        $l = Livros::find($request->id);
    }else{
        $l = new livros;
    }   
    $l->titulo = $request->titulo;
    $l->id_autor = $request->id_autor;

    $l->save();

   return redirect('/livros');


}



public function remover($id){

    $l = Livros::find($id);
    $l->delete();

    return redirect('/livros');
}




}