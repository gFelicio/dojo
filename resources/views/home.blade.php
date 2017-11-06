@extends('layouts.app')

@section('content')
    @include('partials.mains.nav')
    <div class="container">
        
        @if(\Auth::check())
            <h1>
                Produtos cadastrados
            </h1>
            @foreach($products as $product)
                <a href="{{ route("products/detail", ["id" => $product->id]) }}" class="container__card">
                    <div class="container__card__user">
                    {{-- User IMG --}}
                        <img src="http://enadcity.org/enadcity/wp-content/uploads/2017/02/profile-pictures.png" >
                        <span>
                            Teste Usuario
                        </span>
                    </div>
                    <img src="{!! asset('public/uploads/' . $product->image) !!}">
                    <div class="container__card__info">
                        <h3>
                            {{ $product->title }}
                        </h3>
                        <h4>
                            {{ $product->price }}
                        </h4>
                    </div>
                </a>
            @endforeach
        @else
            <div>
                Bem vindo!
                <br/>
                Registre-se.
            </div>
        @endif
    </div>
@endsection
