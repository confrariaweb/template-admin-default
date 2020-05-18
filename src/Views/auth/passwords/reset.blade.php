@extends('templateAdminDefault::layouts.auth')

@section('title', 'Login')

@section('content')

<div class="row">
    <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-2">{{ __('Reset Password') }}</h1>
                <p class="mb-4">Entendemos, as coisas acontecem. Basta digitar seu endereço de e-mail abaixo e enviaremos um link para redefinir sua senha!</p>
            </div>
            <form method="POST" action="{{ route('password.update') }}" class="user">
                @csrf
                <div class="form-group">
                    <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" placeholder="Seu e-mail" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <div class="col-6">
                        <input id="password" type="password" class="form-control form-control-user form-control-user @error('password') is-invalid @enderror" placeholder="Sua nova senha" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <input id="password-confirm" type="password" class="form-control form-control-user form-control-user" name="password_confirmation" placeholder="Repita a senha" required autocomplete="new-password">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    {{ __('Reset Password') }}
                </button>
            </form>
            <hr>
            <div class="text-center">
                <a class="small" href="{{ route('register') }}">Criar uma nova conta!</a>
            </div>
            <div class="text-center">
                <a class="small" href="{{ route('login') }}">Já tem uma conta? Entrar!</a>
            </div>
        </div>
    </div>
</div>
@endsection