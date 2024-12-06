<?php
namespace App\Http\Controllers;

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
        return view('emprestimos.cadastro',compact('resultado'));
}




public function salvar(Request $request)
{
    if($request->id){
        $e = Emprestimos::find($request->id);
    }else{
        $e = new Emprestimos;
    }   
    $e->nome = $request->nome;

    $e->save();

   return redirect('/emprestimos');


}



public function remover($id){

    $u = Emprestimos::find($id);
    $u->delete();

    return redirect('/emprestimos');
}




}