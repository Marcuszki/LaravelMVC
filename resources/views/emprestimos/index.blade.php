<h1>Emprestimos</h1>
<table>
<tr>
<th>Data Emprestimo </th>
<th>Data Devolucao</th>
<th>Editar</th>
<th>Remover</th>
</tr>
@foreach($emprestimos as $emprestimo)
<tr>
<td>{{ $usuario->nome }}</td>
<td>{{ $usuario->email }}</td>
<td><a href='/emprestimos/cadastro/{{ $emprestimos->id }}'>Editar</a></td>
<td><a href='/emprestimos/remover/{{ $emprestimos->id }}'>Remover</a></td>
</tr>
@endforeach
</table>