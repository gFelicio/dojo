
@extends('layouts.app')

@section('content')
    @include('partials.mains.nav')
    <div class="container">
        <div class="container__card">
            {{--<div class="container__card__name">--}}
            {{--Teste De Boi--}}
            {{--</div>--}}
            <img src="http://www.rtc.cv/admin/imgBD/noticias/boi01_11_11_2013.jpg">
            <div class="container__card__user">
                <img src="http://enadcity.org/enadcity/wp-content/uploads/2017/02/profile-pictures.png" >
                <span>Teste Usuario</span>
            </div>
            <hr>
            <div class="container__card__info">
                <h3>{{ $product->title }}</h3>
                <h4>R${{ $product->price }}</h4>
                <a class="container__img"><img src="{!! asset('public/uploads/' . $product->image) !!}"></a>
            </div>
            <span>{{ $product->description }}</span>
        </div>
    </div>
@endsection
