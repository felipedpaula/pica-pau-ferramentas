@extends('site.layouts.site-default')

@section('content')
    <section class="main-content">
        <div class="default-header">
            <div class="container">
                <h2>Pesquisa</h2>
                <p><strong>Termo buscado: </strong>{{$termo}}</p>
            </div>
        </div>
    </section>

    <section class="main-content">
        <div class="container">
            <div class="lista-itens-encontrados py-3">
                <h5>Itens encontrados: {{count($produtos)}}</h5>
                @foreach ($produtos as $item)
                <a href="/produto/{{$item->slug}}" class="item-encontrado">
                    <p class="mb-1"><strong>{{$item->name}}</strong></p>
                    <p class="m-0">{{$item->description}}</p>
                </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
