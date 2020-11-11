@extends('master')
@section('titulo','Fornecedor')
@section('corpo')
<h1>Funcionário</h1>
<div class="row">
	<div class="col-sm-6">
		<dl>
			<dt>CNPJ</dt>
			<dd>{{$fornecedor->cnpj}}</dd>
			<dt>RAZÃO</dt>
			<dd>{{$fornecedor->razao}}</dd>
			<dt>TELEFONE</dt>
			<dd>{{$fornecedor->telefone}}</dd>
			<dt>EMAIL</dt>
			<dd>{{$fornecedor->email}}</dd>
		</dl>
		<form action="/fornecedor/{{$fornecedor->$id}}" method="post" onsubmit="return confirm('Confirma exclusão?')">
			@crsf
			@method('DELETE')
			<input type="submit" value="Excluir" class="btn btn-primary btn-sm">
			<a href="/fornecedor" class="btn btn-primary btn-sm">Voltar</a>
		</form>
	</div>
</div>
@endsection