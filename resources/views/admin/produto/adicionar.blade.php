@extends('layout')
@section('pagina_titulo', 'Carrinho de compras - Produtos adicionar')

@section('pagina_conteudo')
	<div class="container">
		<div class="row">
			<h3>Adicionar produto</h3>
			<form method="POST" action="{{ route('admin.produtos.salvar') }}">
				{{ csrf_field() }}
				@include('admin.produto._form')

				<button type="submit" class="btn blue">Salvar</button>
			</form>
		</div>
	</div>
	@include('admin.produto._lib')
@endsection