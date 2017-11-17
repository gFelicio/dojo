@extends('auth.app')

@section('content')
    @include('partials.mains.nav')
    <div class="container">
        <h1>
            LOGIN
        </h1>
        <form action="post" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="login">
                <div class="login__email">
                    <input type="text" placeholder="E_mail" name="email" id="email">
                </div>
                <div class="login__senha">
                    <input type="password" placeholder="Senha" name="senha" id="senha">
                </div>
                <div class="login__button">
                    <button class="button__login">
                        Login
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
