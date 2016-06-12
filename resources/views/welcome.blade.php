@extends('base')

@section('title', 'Home')

{{--@section('header')--}}
{{--@endsection--}}

@section('content')
            <div class="title">Hello world!</div>
                <a href="<?= url('/login/facebook') ?>">Login With Facebook</a>
            </div>
@endsection
