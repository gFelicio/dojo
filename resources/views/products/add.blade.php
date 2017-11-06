
@extends('layouts.app')

@section('content')
    @include('partials.mains.nav')
    <div class="container">
    <div class="products">
        <form method="post" action="{{ route("products/store") }}">
            {{ csrf_field() }}
            <div class="products__item
                @if($errors->has('title'))
                    has-error
                @endif">

                <label for="title">
                    Título
                </label><br/>
                <input type="text" placeholder="Título" name="title" id="title"><br/>

                @if($errors->has('title'))
                    <p class="helper">
                        <span class="helper__text">
                            Atenção
                        </span> 
                        {{ $errors->first('title') }}
                    </p>
                @endif
            </div>
            <div class="products__item
                @if($errors->has('description'))
                    has-error
                @endif">

                <label for="description">Descrição do Produto</label><br/>
                <textarea placeholder="Descrição" name="description" id="description"></textarea><br/>

                @if($errors->has('description'))
                    <p class="helper">
                        <span class="helper__text">
                            Atenção
                        </span>
                        {{ $errors->first('description') }}
                    </p>
                @endif
            </div>
            <div class="products__item
                @if($errors->has('price'))
                    has-error
                @endif">

                <label for="price">Valor do Produto</label><br/>
                <input type="text" placeholder="Valor Inicial" name="price" id="price"><br/>

                @if($errors->has('price'))
                    <p class="helper">
                        <span class="helper__text">
                            Atenção
                        </span>
                        {{ $errors->first('price') }}
                    </p>
                @endif
            </div>
            <div class="products__item
                @if($errors->has('bid'))
                    has-error
                @endif">

                <label for="bid">Valor dos Lances</label><br/>
                <input type="text" placeholder="Valor de Lance" name="bid" id="bid"><br/>

                @if($errors->has('bid'))
                    <p class="helper">
                        <span class="helper__text">
                            Atenção
                        </span>
                        {{ $errors->first('bid') }}
                    </p>
                @endif
            </div>
            <div class="products__item
                @if($errors->has('date_end'))
                    has-error
                @endif">

                <label for="date_end">Data de Encerramento de Leilão</label><br/>
                <input type="datetime-local" placeholder="Data de Encerramento" name="date_end" id="date_end"><br/>

                @if($errors->has('date_end'))
                    <p class="helper">
                        <span class="helper__text">
                            Atenção
                        </span>
                        {{ $errors->first('date_end') }}
                    </p>
                @endif
            </div>
            <div class="products__item
                @if($errors->has('image'))
                    has-error
                @endif">

                <label for="image">Inserir Imagem</label><br/>
                <input type="file" name="image" id="image"><br/>

                @if($errors->has('image'))
                    <p class="helper">
                        <span class="helper__text">
                            Atenção
                        </span>
                        {{ $errors->first('image') }}
                    </p>
                @endif
            </div><br/>

            <div class="products__button">
                <button type="submit">
                    LEILOAR
                </button>
            </div>
        </form>
    </div>
    </div>
@endsection
