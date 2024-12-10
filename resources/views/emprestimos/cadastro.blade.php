<h1>Cadastrar Emprestimos</h1>
<form method="POST" action="/emprestimos/salvar">
@csrf
<label>Data de Emprestimos :</label>
<input type="date" name="data_emprestimo" value="{{@$resultado->data_emprestimo}}"><br>

<label>Data de Devolução :</label>
<input type="date" name="data_devolucao" value="{{@$resultado->data_devolucao}}"><br>

<select name="id_autor">
    @foreach($autores as $autor)
    <option value="{{$autor->id}}">{{$autor->nome}}</option>
    @endforeach
</select>

<select name="id_livro">
    @foreach($livros as $livro)
    <option value="{{$livros->id}}">{{$livro->titulo}}</option>
    @endforeach
</select>


<input type="hidden" name="id" value="{{@$resultado->id}}">

<button type="submit">Salvar</button>
</form>