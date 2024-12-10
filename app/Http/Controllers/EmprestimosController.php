<?php
namespace App\Http\Controllers;

use App\Models\Autores;
use App\Models\Livros;
use Illuminate\Http\Request;
use App\Models\Emprestimos;

class EmprestimosController extends Controller
{
public function index()
{
    $emprestimos = Emprestimos::get();
       
    return view('Emprestimos.index', compact('emprestimos'));
}





public function cadastro($id=null)
{
    $resultado = null;
    if($id){
        $resultado = Emprestimos::find($id);
    }
    $livros = Livros::get();
    $autores = Autores::get();
        return view('emprestimos.cadastro',compact('resultado','autores','livros'));
}




public function salvar(Request $request)
{
    if($request->id){
        $e = Emprestimos::find($request->id);
    }else{
        $e = new Emprestimos;
    }   
    $e->data_emprestimo = $request->data_emprestimo;
    $e->data_devolucao = $request->data_devolucao;
    $e->id_autor = $request->id_autor;
    $e->id_livro = $request->id_livro;

    $e->save();

   return redirect('/emprestimos');


}



public function remover($id){

    $u = Emprestimos::find($id);
    $u->delete();

    return redirect('/emprestimos');
}




}