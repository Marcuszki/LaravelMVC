<h1>Cadastrar Autor</h1>
<form method="POST" action="/autores/salvar">
@csrf
<label>Nome:</label>
<input type="text" name="nome" value="{{@$resultado->nome}}"><br>

<input type="hidden" name="id" value="{{@$resultado->id}}">
<button type="submit">Salvar</button>
</form>