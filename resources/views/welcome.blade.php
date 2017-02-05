@extends('layouts.master')

@section('content')
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">SB Admin</a>
    </div>
        <div class="container vertical-center">
           <h1 style="color:#ffffff; font-size: 50px;"><span class="label label-default">MyApiService</span></h1>
        </div>
    {{--<div class="flex-center position-ref full-height">--}}
        {{--@if (Route::has('login'))--}}
            {{--<div class="top-right links">--}}
                {{--@if (Auth::check())--}}
                    {{--<a href="{{ url('/home') }}">Home</a>--}}
                {{--@else--}}
                    {{--<a href="{{ url('/login') }}">Login</a>--}}
                    {{--<a href="{{ url('/register') }}">Register</a>--}}
                {{--@endif--}}
            {{--</div>--}}
        {{--@endif--}}

        {{--<div class="content">--}}
            {{--<div class="title m-b-md">--}}
                {{--MyApiService--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection


