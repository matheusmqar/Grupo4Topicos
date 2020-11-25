@extends('master')
@section('titulo','Pedidos')
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
	<h2>Realizar pedido de materiais</h2> <br/>
</div>
<div class="col" style=" margin-left: 55%;">
</div>
</div>

<table class="table table-hover table-borderless">
	<tr>
		<th>ID</th>
		<th>Descrição</th>
		<th>Quantidade</th>
		<th>Minímo</th>
		<th>Solicitar</th>
	</tr>


	<tr>
		<td>1</td>
		<td>Barra de Ferro</td>
		<td>20</td>
		<td>21</td>
		</form>
		<td>
			<form action="" method="post"> 
			<input type="number" id="pedido" name="pedido" class="form-control-sm">
			<input type="submit" value="Solicitar" style="background-color:  #7952B3" class="btn btn-primary btn-sm">
			</form>
		</td>
	</tr>
	<tr>
		<td>5</td>
		<td>Barra de Alumínio</td>
		<td>9</td>
		<td>10</td>
		</form>
		<td>
			<form action="" method="post"> 
			<input type="number" id="pedido" name="pedido" class="form-control-sm">
			<input type="submit" value="Solicitar" style="background-color:  #7952B3" class="btn btn-primary btn-sm">
			</form>
		</td>
	</tr>

	<tr>
		<td>8</td>
		<td>Alicate</td>
		<td>4</td>
		<td>27</td>
		</form>
		<td>
			<form action="" method="post"> 
			<input type="number" id="pedido" name="pedido" class="form-control-sm">
			<input type="submit" value="Solicitar" style="background-color:  #7952B3" class="btn btn-primary btn-sm">
			</form>
		</td>
	</tr>

</table>



</div>

@endsection