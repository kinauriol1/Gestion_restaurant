@extends('base')

@section('title', 'Bienvenue')

@section('content')
    <p>Bienvenue sur notre système de gestion de restaurant !</p>

    @guest
        <a href="{{ route('login') }}">Se connecter</a> |
        <a href="{{ route('register') }}">S'inscrire</a>
    @else
        <a href="/dashboard">Aller au tableau de bord</a>
    @endguest
@endsection
