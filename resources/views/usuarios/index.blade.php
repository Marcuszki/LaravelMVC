
<h1>Lista de Usuários</h1>
<table>
<tr>
<th>Nome</th>
<th>Email</th>
<th>Editar</th>
<th>Remover</th>
</tr>
@foreach($usuarios as $usuario)
<tr>
<td>{{ $usuario->nome }}</td>
<td>{{ $usuario->email }}</td>
<td><a href='/usuarios/cadastro/{{ $usuario->id }}'>Editar</a></td>
<td><a href='/usuarios/remover/{{ $usuario->id }}'>Remover</a></td>
</tr>
@endforeach
</table>