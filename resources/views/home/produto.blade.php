@extends('layout')
@section('pagina_titulo', $registro->nome )

@section('pagina_conteudo')

<div class="container">
    <div class="row">
        <h3>{{ $registro->nome }}</h3>
        <div class="divider"></div>
        <div class="section col s12 m6 l4">
            <div class="card small">
                <img class="col s12 m12 l12 materialboxed" data-caption="{{ $registro->nome }}" src="{{ $registro->imagem }}" alt="{{ $registro->nome }}" title="{{ $registro->nome }}">
            </div>
        </div>
        <div class="section col s12 m6 l6">
            <h4 class="left col l6"> R$ {{ number_format($registro->valor, 2, ',', '.') }} </h4>
            <form method="POST" action="{{ route('carrinho.adicionar') }}">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $registro->id }}">
                <button class="btn-large col l6 m6 s6 green accent-4 tooltipped" data-position="bottom" data-delay="50" data-tooltip="O produto será adicionado ao seu carrinho">Comprar</button>   
            </form>
        </div>
        <div class="section col s12 m6 l6">
            {!! $registro->descricao !!}
        </div>
    </div>
</div>
@endsection