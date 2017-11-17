@extends('auth.app')

@section('content')
@include('partials.mains.nav')
    <div class="container">
        <h1>
            REGISTER
        </h1>
        <form method="post" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="register">
                <div class="register__nome">
                    {{--<label for="name" class="control-label">Name</label>--}}
                    <input id="name" type="text" placeholder="Nome" name="name" required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                         </span>
                    @endif
                </div>
                <div class="register__email">
                    {{--<label for="email" class="control-label">Email</label>--}}
                    <input id="email" type="text" placeholder="E-mail" name="email" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                         </span>
                    @endif
                </div>
                <div class="register__senha">
                    {{--<label for="senha" class="control-label">Senha</label>--}}
                    <input id="senha" type="password" placeholder="Senha" name="password" required autofocus>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                         </span>
                    @endif
                </div>
                <div class="register__button">
                    <button type="submit">Registrar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
