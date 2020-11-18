@extends('master')
@section('titulo','Criar Material')
@section('corpo')

<div class="container">
<h1>Novo Material</h1>
<div class="row">
	<div class="col-sm-6">
		<form action="/material" method="post">
			@csrf
			<div class="form-group">
				<label for="descricao">Descrição</label>
				<input type="text" name="descricao"
				id="descricao" class="form-control" value="{{old('descricao')}}"/>
				@if($errors->has('descricao'))
				<p class="text-danger">{{$errors->first('descricao')}}</p>
				@endif
			</div>
			<div class="form-group">
				<label for="quantidade">Quantidade</label>
				<input type="number" name="quantidade"
				id="quantidade" class="form-control" value="{{old('quantidade')}}"/>
				@if($errors->has('quantidade'))
				<p class="text-danger">{{$errors->first('quantidade')}}</p>
				@endif
			</div>
			<div class="form-group">
				<label for="minimo">Minímo</label>
				<input type="number" name="minimo"
				id="minimo" class="form-control" value="{{old('minimo')}}"/>
				@if($errors->has('minimo'))
				<p class="text-danger">{{$errors->first('minimo')}}</p>
				@endif
			</div>
			<input type="submit" value="Criar" style="background-color:  #7952B3" class="btn btn-primary btn-sm"/>
			<a href="/material" style="background-color:  #7952B3" class="btn btn-primary btn-sm">Voltar</a>
		</form>
	</div>
</div>
</div>
@endsection