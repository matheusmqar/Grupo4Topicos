@extends('master')
@section('titulo','Lista de Materiais')
@section('corpo')

<H1>TESTE</H1>
<a href="/material/create" class="btn btn-primary btn-sm">Novo</a>
<table class="table table-striped">
	<tr>
		<th>ID</th>
		<th>Descrição</th>
		<th>Quantidade</th>
		<th>Minímo</th>
	</tr>

	@foreach($materiais as $f)
	<tr>
		<td>{{$f->id}}</td>
		<td>{{$f->descricao}}</td>
		<td>{{$f->quantidade}}</td>
		<td>{{$f->minimo}}</td>
		<td>
			<a href="/material/{{$f->id}}" class="btn btn-primary btn-sm">Detalhe</a>
			<a href="/material/{{$f->id}}/edit" class="btn btn-primary btn-sm">Editar</a>
		</td>
	</tr>
	@endforeach
</table>
{{ $materiais->links() }}
@endsection