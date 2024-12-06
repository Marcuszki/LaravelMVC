<h1>Cadastrar Livros</h1>
<form method="POST" action="/livros/salvar">
@csrf
<label>Titulo:</label>
<input type="text" name="titulo" value="{{@$resultado->titulo}}"><br>

<select name="id_autor">
    @foreach($autores as $autor)
    <option value="{{$autor->id}}">{{$autor->nome}}</option>
    @endforeach
</select>


<input type="hidden" name="id" value="{{@$resultado->id}}">
<button type="submit">Salvar</button>
</form>