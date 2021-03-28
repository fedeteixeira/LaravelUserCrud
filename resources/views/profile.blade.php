@extends('layouts.app')

@section('content')
    
    <div class="container">
        <profile-component user_no_json="{{$user}}"></profile-component>
    </div>

@endsection
