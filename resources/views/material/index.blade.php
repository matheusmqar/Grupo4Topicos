@extends('master')
@section('titulo','Lista de Materiais')
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
	<h2>Materiais</h2> <br/>
</div>
<div class="col" style=" margin-left: 55%;">
<a href="/material/create" style="background-color:  #7952B3" class="btn btn-primary btn-sm">Novo</a>
</div>
</div>
<table class="table table-hover table-borderless">
	<tr>
		<th>ID</th>
		<th>Descrição</th>
		<th>Quantidade</th>
		<th>Minímo</th>
		<th>Ações</th>
	</tr>

	@foreach($materiais as $m)
	<tr>
		<td>{{$m->id}}</td>
		<td>{{$m->descricao}}</td>
		<td>{{$m->quantidade}}</td>
		<td>{{$m->minimo}}</td>
		<td>
			<a href="/material/{{$m->id}}" style="background-color:  #7952B3" class="btn btn-primary btn-sm">Detalhe</a>
			<a href="/material/{{$m->id}}/edit" style="background-color:  #7952B3" class="btn btn-primary btn-sm">Editar</a>
		</td>
	</tr>
		@endforeach
</table>

	@foreach($materiais as $m)
@if($m->quantidade < $m->minimo)


<div class="alert alert-danger" role="alert">
<div>
O item: {{$m->descricao}} está em falta! 

 <a class="btn btn-primary btn-sm float-right"  href="/pedido" style="background-color:  #7952B3;  "> <!-- /material/{{$m->id}}/pedido -->
    Fazer pedido do item.
 </a> 

 </div>
</div>

@endif
@endforeach

{{ $materiais->links() }}

</div>


@endsection