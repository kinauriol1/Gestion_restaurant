@extends('base')

@section('content')
<style>
    .confirmation-container {
        background-color: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(10px);
        padding: 60px;
        border-radius: 25px;
        color: white;
        max-width: 800px;
        margin: 80px auto;
        text-align: center;
        box-shadow: 0 0 25px rgba(0,0,0,0.4);
    }

    .confirmation-title {
        font-size: 32px;
        color: #00ff88;
        font-weight: bold;
        margin-bottom: 30px;
    }

    .confirmation-buttons a {
        display: inline-block;
        margin: 15px;
        padding: 15px 25px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: bold;
        font-size: 16px;
        color: white;
        background-color: #2563eb;
    }

    .confirmation-buttons a:hover {
        background-color: #1d4ed8;
    }
</style>

<div class="confirmation-container">
    <div class="confirmation-title">🎉 Commande Réussie !</div>

    <div class="confirmation-buttons">
        <a href="{{ route('dashboard') }}">📋 Voir ma commande</a>
        <a href="{{ route('commande.form') }}">🛒 Passer une autre commande</a>
    </div>
</div>
@endsection
