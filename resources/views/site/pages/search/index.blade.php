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
            @foreach ($produtos as $item)
                <p>{{$item->name}}</p>
            @endforeach
        </div>
    </section>
@endsection
