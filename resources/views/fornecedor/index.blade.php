@extends('master')
@section('titulo','Lista de Fornecedores')
@section('corpo')

<a href="/fornecedor/create" class="btn btn-primary btn-sm">Novo</a>
<table class="table table-striped">
	<tr>
		<th>ID</th>
		<th>CNPJ</th>
		<th>RAZÃO</th>
		<th>TELEFONE</th>
		<th>EMAIL</th>
	</tr>

	@foreach($fornecedores as $f)
	<tr>
		<td>{{$f->id}}</td>
		<td>{{$f->cnpj}}</td>
		<td>{{$f->razao}}</td>
		<td>{{$f->telefone}}</td>
		<td>{{$f->email}}</td>
		<td>
			<a href="/fornecedor/{{$f->id}}" class="btn btn-primary btn-sm">Detalhe</a>
			<a href="/fornecedor/{{$f->id}}/edit" class="btn btn-primary btn-sm">Editar</a>
		</td>
	</tr>
	@endforeach
</table>
{{$fornecedores->links()}}
@endsection