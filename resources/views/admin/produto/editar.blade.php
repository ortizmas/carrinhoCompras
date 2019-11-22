@extends('layout')
@section('pagina_titulo', 'Carrinho de compras - Produtos editar')

@section('pagina_conteudo')
	<div class="container">
		<div class="row">
			<h3>Editar produto "{{ $registro->nome }}"</h3>
			<form method="POST" action="{{ route('admin.produtos.atualizar', $registro->id) }}">
				{{ csrf_field() }}
				{{ method_field('PUT') }}

				@include('admin.produto._form')

				<button type="submit" class="btn blue">Atualizar</button>
			</form>
		</div>
	</div>
	@include('admin.produto._lib')
@endsection