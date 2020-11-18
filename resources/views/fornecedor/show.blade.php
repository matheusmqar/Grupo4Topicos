@extends('master')
@section('titulo','Fornecedor')
@section('corpo')

<div class="container">
	<h2>Fornecedor N°{{$fornecedor->id}}</h2>
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
		<form action="/fornecedor/{{$fornecedor->id}}" method="post" onsubmit="return confirm('Confirma exclusão?')">
			@csrf
			@method('DELETE')
			<input type="submit" value="Excluir" style="background-color:  #7952B3" class="btn btn-primary btn-sm">
			<a href="/fornecedor" style="background-color:  #7952B3" class="btn btn-primary btn-sm">Voltar</a>
		</form>
	</div>
</div>
</div>
@endsection