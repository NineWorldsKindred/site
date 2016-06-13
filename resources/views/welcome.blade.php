@extends('base')

@section('title', 'Home')

{{--@section('header')--}}
{{--@endsection--}}

@section('content')
            <div class="title">Hello world!</div>
                @if($user)
                    Welcome, <?= $user->name ?>! <a href="<?= url('/logout') ?>">Log out</a>
                @else
                    <a href="<?= url('/login/facebook') ?>">Login With Facebook</a> </br>
                    <a href="<?= url('/login/google') ?>">Login With Google</a>
                @endif
            </div>
@endsection
