@extends('master')
@section('titulo','Editar Material')
@section('corpo')

<div class="container">
	<h2>Editar Material N°{{$material->id}}</h2>
<div class="row">
	<div class="col-sm-6">
		<form action="/material/{{$material->id}}" method="post">
			@csrf
			@method('PUT')
			<div class="form-group">
				<label for="descricao">Descrição</label>
				<input type="text" name="descricao"
				id="descricao" class="form-control" value="{{empty(old('descricao')) ? $material->descricao : old('descricao')}}"/>
				@if($errors->has('descricao'))
				<p class="text-danger">{{$errors->first('descricao')}}</p>
				@endif
			</div>
			<div class="form-group">
				<label for="quantidade">Quantidade</label>
				<input type="number" name="quantidade"
				id="quantidade" class="form-control"value="{{empty(old('quantidade')) ? $material->quantidade : old('quantidade')}}"/>
				@if($errors->has('quantidade'))
				<p class="text-danger">{{$errors->first('quantidade')}}</p>
				@endif
			</div>
			<div class="form-group">
				<label for="minimo">Minímo</label>
				<input type="number" name="minimo"
				id="minimo" class="form-control" value="{{empty(old('minimo')) ? $material->minimo : old('minimo')}}""/>
				@if($errors->has('minimo'))
				<p class="text-danger">{{$errors->first('minimo')}}</p>
				@endif
			</div>
			<input type="submit" value="Alterar" style="background-color:  #7952B3" class="btn btn-primary btn-sm"/>
			<a href="/material" style="background-color:  #7952B3" class="btn btn-primary btn-sm">Voltar</a>
		</form>
	</div>
</div>
</div>
@endsection