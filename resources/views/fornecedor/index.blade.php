@extends('master')
@section('titulo','Lista de Fornecedores')
@section('corpo')

<style>
	.page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: #7952B3; 
    border-color: white; 
}
</style>
<div class="container">

<div class="row">
<div class="col">
<h2>Fornecedores</h2> <br/>
</div>
<div class="col" style=" margin-left: 55%;">
<a href="/fornecedor/create" style="background-color:  #7952B3" class="btn btn-primary btn-sm">Novo</a>
</div>
</div>
<table class="table table-hover table-borderless">
	<tr>
		<th>ID</th>
		<th>CNPJ</th>
		<th>RAZÃO</th>
		<th>TELEFONE</th>
		<th>EMAIL</th>
		<th>Ação</th>
	</tr>

	@foreach($fornecedores as $f)
	<tr>
		<td>{{$f->id}}</td>
		<td>{{$f->cnpj}}</td>
		<td>{{$f->razao}}</td>
		<td>{{$f->telefone}}</td>
		<td>{{$f->email}}</td>
		<td>
			<a href="/fornecedor/{{$f->id}}" style="background-color:  #7952B3" class="btn btn-primary btn-sm">Detalhe</a>
			<a href="/fornecedor/{{$f->id}}/edit" style="background-color:  #7952B3" class="btn btn-primary btn-sm">Editar</a>
		</td>
	</tr>
	@endforeach
</table>
{{$fornecedores->links()}}
</div>

@endsection