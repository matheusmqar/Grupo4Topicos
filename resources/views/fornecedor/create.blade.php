@extends('master')
@section('titulo','Criar Fornecedor')
@section('corpo')

<h1>Novo Fornecedor</h1>
<div class="row">
	<div class="col-sm-6">
		<form action="/fornecedor" method="post">
			@csrf
			<div class="form-group">
				<label for="cnpj">CNPJ</label>
				<input type="text" name="cnpj"
				id="cnpj" class="form-control" value="{{old('cnpj')}}"/>
				@if($errors->has('cnpj'))
				<p class="text-danger">{{$errors->first('cnpj')}}</p>
				@endif
			</div>
			<div class="form-group">
				<label for="razao">Razão</label>
				<input type="text" name="razao"
				id="razao" class="form-control" value="{{old('razao')}}"/>
				@if($errors->has('razao'))
				<p class="text-danger">{{$errors->first('razao')}}</p>
				@endif
			</div>
			<div class="form-group">
				<label for="telefone">Telefone</label>
				<input type="text" name="telefone"
				id="telefone" class="form-control" value="{{old('telefone')}}"/>
				@if($errors->has('telefone'))
				<p class="text-danger">{{$errors->first('telefone')}}</p>
				@endif
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" name="email"
				id="email" class="form-control" value="{{old('email')}}"/>
				@if($errors->has('email'))
				<p class="text-danger">{{$errors->first('email')}}</p>
				@endif
			</div>
			<input type="submit" value="Criar" class="btn btn-primary btn-sm"/>
			<a href="/fornecedor" class="btn btn-primary btn-sm">Voltar</a>
		</form>
	</div>
</div>
@endsection