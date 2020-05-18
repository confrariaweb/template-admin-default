@extends('templateAdminDefault::layouts.auth')

@section('title', 'Login')

@section('content')
<div class="row">
    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
    <div class="col-lg-7">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">{{ __('Register') }}</h1>
            </div>
            <form method="POST" action="{{ route('register') }}" class="user">
                @csrf
                <div class="form-group">
                    <input id="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" placeholder="Seu nome" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" placeholder="Seu e-mail" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" placeholder="Senha" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-sm-6">                       
                        <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" placeholder="Repita a senha" required autocomplete="new-password">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    {{ __('Register') }}
                </button>
                <!--hr>
                <a href="index.html" class="btn btn-google btn-user btn-block">
                    <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a-->
            </form>
            <hr>
            <div class="text-center">
                <a class="small" href="{{ route('login') }}">Já tem uma conta? Entrar!</a>
            </div>
        </div>
    </div>
</div>
@endsection