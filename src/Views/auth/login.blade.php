@extends('templateAdminDefault::layouts.auth')

@section('title', 'Login')

@section('content')

<div class="row">
    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">{{ __('Login') }}</h1>
            </div>
            <form method="POST" action="{{ route('login') }}" class="user">
                @csrf
                <div class="form-group">                                   
                    <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" placeholder="Senha" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                        <input class="form-check-input custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="custom-control-label" for="customCheck">{{ __('Lembre-se de mim') }}</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Login
                </button>
                <!--hr>
                <a href="#" class="btn btn-google btn-user btn-block">
                    <i class="fab fa-google fa-fw"></i> Login pelo Google
                </a>
                <a href="#" class="btn btn-facebook btn-user btn-block">
                    <i class="fab fa-facebook-f fa-fw"></i> Login pelo Facebook
                </a-->
            </form>
            <hr>
            <div class="text-center">
                @if (Route::has('password.request'))
                <a class="small" href="{{ route('password.request') }}">{{ __('Esqueceu sua senha?') }}</a>
                @endif
            </div>
            <div class="text-center">
                <a class="small" href="{{ route('register') }}">{{ __('Cadastre-se!') }}</a>
            </div>
        </div>
    </div>
</div>

@endsection