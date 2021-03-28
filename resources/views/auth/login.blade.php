@extends('layouts.app')

@section('content')
<div class="container d-flex flex-column min-vw-100 min-vh-100 justify-content-center homeBackPic">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card opacity border-0">
                <div class="card-header text-light border-0">
                    <h1>{{ __('Login') }}</h1>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right text-light">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right text-light">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-light" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group d-flex flex-column align-items-center justify-content-center mb-0">
                            <button type="submit" class="btn btn-primary w-50">
                                {{ __('Login') }}
                            </button>
                        </div>

                        <d-flex class="d-flex flex-column align-items-center justify-content-center">
                            

                            <div class="form-group row mb-0">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-light" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>

                            <div class="form-group row mb-0">
                                @if (Route::has('register'))
                                            <a class="btn btn-link text-light" href="{{ route('register') }}">
                                                {{ __('Don\'t have an account? Sign up') }}
                                            </a>
                                @endif
                            </div>
                        </d-flex>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
