@extends('layouts.app')

@section('content')
    <div class="homeBackPic">
        <div class="overlay">
            <div class="content d-flex flex-column justify-content-center align-items-center min-vw-100 min-vh-100">
                <main role="main" class="inner cover">
                    <h1 class="cover-heading text-light">Federico's Laravel Test</h1>
                    <div class="d-flex justify-content-around">
                        @if (Route::has('login'))
                            <div>
                                @auth
                                    <a href="{{ url('/home') }}">
                                        <button class="btn btn-primary">HOME</button>
                                    </a>
                                @else
                                    <a href="{{ route('login') }}">
                                        <button class="btn btn-primary">LOGIN</button>
                                    </a>
                
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">
                                            <button class="btn btn-secondary">REGISTER</button>
                                        </a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection
