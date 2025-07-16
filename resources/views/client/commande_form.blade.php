@extends('base')

@section('content')
<style>
    body {
        background-image: url('/images/background.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    .form-container {
        background-color: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(10px);
        padding: 50px;
        border-radius: 25px;
        box-shadow: 0 0 25px rgba(0,0,0,0.4);
        color: white;
        max-width: 1000px;
        margin: 60px auto;
    }

    .form-control {
        background-color: transparent;
        border: 1px solid #fff;
        color: white;
        height: 50px;
        font-size: 17px;
        padding-left: 15px;
    }

    input::placeholder {
        color: #ccc;
    }

    label {
        font-weight: bold;
        color: #fff;
        margin-bottom: 6px;
        display: block;
    }

    .btn-submit {
        background-color: #ffffff;
        color: #000;
        font-weight: bold;
        padding: 15px;
        font-size: 18px;
        width: 100%;
        margin-top: 30px;
        border-radius: 10px;
    }

    .form-row {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
    }

    .form-group {
        flex: 1 1 45%;
        display: flex;
        flex-direction: column;
    }

    @media (max-width: 768px) {
        .form-group {
            flex: 1 1 100%;
        }
    }
</style>

<div class="container">
    <div class="form-container">
        <h2 class="text-center mb-5">🧾 Passer une commande</h2>

        @if(session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('commande.store') }}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group">
                    <label for="nom_client">Nom du client</label>
                    <input type="text" name="nom_client" class="form-control" placeholder="Ex: Rodrigue" required>
                </div>

                <div class="form-group">
                    <label for="plat">Nom du plat</label>
                    <input type="text" name="plat" class="form-control" placeholder="Ex: Riz sauce tomate" required>
                </div>

                <div class="form-group">
                    <label for="quantite">Quantité</label>
                    <input type="number" name="quantite" class="form-control" placeholder="Ex: 2" required min="1">
                </div>

                <div class="form-group">
                    <label for="prix_total">Prix total (FCFA)</label>
                    <input type="number" name="prix_total" class="form-control" placeholder="Ex: 1500" required min="0">
                </div>
            </div>

            <button type="submit" class="btn btn-submit">✅ Commander</button>
        </form>
    </div>
</div>
@if(session('success'))
    <div style="background-color: #d1fae5; color: #065f46; padding: 20px; font-size: 22px; border-radius: 12px; text-align: center; margin-bottom: 30px;">
        ✅ {{ session('success') }}
    </div>

    <div class="text-center space-x-4">
        <a href="{{ route('app_admin') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Voir la commande
        </a>
        <a href="{{ route('commande.form') }}" class="inline-block bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Passer une autre commande
        </a>
    </div>
@endif

@endsection
