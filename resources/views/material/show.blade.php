@extends('master')
@section('titulo','Material')
@section('corpo')

<div class="container">
	<h2>Material N°{{$material->id}}</h2>
<div class="row">
	<div class="col-sm-6">
		<dl>
			<dt>Descrição</dt>
			<dd>{{$material->descricao}}</dd>
			<dt>Quantidade</dt>
			<dd>{{$material->quantidade}}</dd>
			<dt>Minímo</dt>
			<dd>{{$material->minimo}}</dd>
		</dl>
		<form action="/material/{{$material->id}}" method="post" onsubmit="return confirm('Confirma exclusão?')">
			@csrf
			@method('DELETE')
			<input type="submit" value="Excluir" style="background-color:  #7952B3" class="btn btn-primary btn-sm">
			<a href="/material" style="background-color:  #7952B3" class="btn btn-primary btn-sm">Voltar</a>
		</form>
	</div>
</div>
</div>
@endsection