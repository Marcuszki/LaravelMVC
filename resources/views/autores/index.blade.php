<h1>Lista de Autores</h1>
<table>
<tr>
<th>Nome</th>
<th>Editar</th>
<th>Remover</th>
</tr>
@foreach($autores as $autores)
<tr>
<td>{{ $autores->nome }}</td>

<td><a href='/autores/cadastro/{{ $autores->id }}'>Editar</a></td>
<td><a href='/autores/remover/{{ $autores->id }}'>Remover</a></td>
</tr>
@endforeach
</table>