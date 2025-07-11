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

    .info-box {
        background-color: rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        padding: 25px;
        margin-top: 40px;
        color: white;
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
        <h2 class="text-center mb-5">🛵 Livraison à Domicile</h2>

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

        <form action="{{ route('livraison.store') }}" method="POST">
            @csrf
            <div class="form-row">
                <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" class="form-control" placeholder="Ex: Kossi" required>
                </div>

                <div class="form-group">
                    <label for="prenom">Prénoms</label>
                    <input type="text" name="prenom" class="form-control" placeholder="Ex: Rodrigue Agossou" required>
                </div>

                <div class="form-group">
                    <label for="telephone">Téléphone</label>
                    <input type="text" name="telephone" class="form-control" placeholder="Ex: +229 91 00 00 00" required>
                </div>

                <div class="form-group">
                    <label for="email">Adresse Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Ex: client@gmail.com">
                </div>

                <div class="form-group">
                    <label for="ville">Ville</label>
                    <input type="text" name="ville" class="form-control" placeholder="Ex: Cotonou" required>
                </div>

                <div class="form-group">
                    <label for="quartier">Quartier</label>
                    <input type="text" name="quartier" class="form-control" placeholder="Ex: Zogbo" required>
                </div>
            </div>

            <button type="submit" class="btn btn-submit">✅ Enregistrer les informations</button>
        </form>

        @if(isset($delivery))
        <div class="info-box mt-5">
            <h4>📦 Détails de votre Livraison :</h4>
            <ul class="mt-3">
                <li><strong>Nom :</strong> {{ $delivery->nom }}</li>
                <li><strong>Prénoms :</strong> {{ $delivery->prenom }}</li>
                <li><strong>Téléphone :</strong> {{ $delivery->telephone }}</li>
                <li><strong>Email :</strong> {{ $delivery->email }}</li>
                <li><strong>Ville :</strong> {{ $delivery->ville }}</li>
                <li><strong>Quartier :</strong> {{ $delivery->quartier }}</li>
                <li><strong>📅 Heure prévue :</strong> {{ $delivery->heure_livraison->format('H:i') }}</li>
            </ul>
        </div>
        @endif
    </div>
</div>
@endsection
