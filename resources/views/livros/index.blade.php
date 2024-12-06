
<h1>Lista de Titulos</h1>
<table>
<tr>
<th>titulo</th>
<th>id_autor</th>
<th>Editar</th>
<th>Remover</th>
</tr>
@foreach($livros as $livro)
<tr>
<td>{{$livro->titulo}}</td>
<td>{{$livro->autor->nome}}</td>

<td><a href='/livros/cadastro/{{ $livro->id }}'>Editar</a></td>
<td><a href='/livros/remover/{{ $livro->id }}'>Remover</a></td>
</tr>
@endforeach
</table>