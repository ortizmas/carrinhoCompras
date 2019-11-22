@extends('layout')
@section('pagina_titulo', 'Carrinho de compras - Produtos')

@section('pagina_conteudo')
	<div class="container">
		<div class="row">
			<h3>Lista de produtos</h3>
			@if (Session::has('admin-mensagem-sucesso'))
	            <div class="card-panel green"><strong>{{ Session::get('admin-mensagem-sucesso') }}<strong></div>
	        @endif
			<table>
				<thead>
					<tr>
						<th></th>
						<th>ID</th>
						<th>Nome</th>
						<th>Valor</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($produtos as $produto)
					<tr>
						<td>
							<a class="btn-flat tooltipped" href="{{ route('admin.produtos.editar', $produto->id) }}" class="btn-flat tooltipped" data-position="right" data-delay="50" data-tooltip="Editar produto?">
								<i class="material-icons black-text">mode_edit</i>
							</a>
							<a class="btn-flat tooltipped" href="{{ route('admin.produtos.deletar', $produto->id) }}" class="btn-flat tooltipped" data-position="right" data-delay="50" data-tooltip="Deletar produto?">
								<i class="material-icons black-text">delete</i>
								</a>
						</td>
						<td>{{ $produto->id }}</td>
						<td>{{ $produto->nome }}</td>
						<td>R$ {{ $produto->valor }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="row">
			<a class="btn-floating btn-large blue tooltipped" href="{{ route('admin.produtos.adicionar') }}" title="Adicionar" data-position="top" data-delay="50" data-tooltip="Adicionar produto?">
				<i class="material-icons">add</i>
			</a>
		</div>
	</div>

@endsection