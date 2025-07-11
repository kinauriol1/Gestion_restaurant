@extends('base')

@section('content')
<style>
    .payment-container {
        background-color: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(10px);
        padding: 40px;
        border-radius: 20px;
        max-width: 700px;
        margin: 60px auto;
        color: white;
        box-shadow: 0 0 25px rgba(0, 0, 0, 0.4);
    }

    .form-control {
        background-color: transparent;
        border: 1px solid #fff;
        color: white;
        font-size: 16px;
        height: 45px;
        border-radius: 10px;
    }

    label {
        margin-bottom: 5px;
        font-weight: bold;
        color: #fff;
    }

    input::placeholder,
    select {
        color: #ccc;
    }

    .btn-payer {
        background-color: #fff;
        color: #000;
        font-weight: bold;
        width: 100%;
        margin-top: 25px;
        padding: 12px;
        border-radius: 10px;
        font-size: 18px;
        border: none;
    }

    .title {
        text-align: center;
        margin-bottom: 30px;
        color: yellow;
    }

    .form-group {
        margin-bottom: 20px;
    }
</style>

<div class="container">
    <div class="payment-container">
        <h2 class="title">📲 Paiement Mobile Bénin</h2>

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

        <form action="{{ route('paiement.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="operateur">Opérateur Mobile</label>
                <select name="operateur" class="form-control" required>
                    <option value="">-- Choisir un opérateur --</option>
                    <option value="MTN">📱 MTN Bénin</option>
                    <option value="Moov">📞 Moov Africa</option>
                    <option value="Celtiis">📡 Celtiis</option>
                </select>
            </div>

            <div class="form-group">
                <label for="telephone">Numéro de téléphone</label>
                <input type="text" name="telephone" class="form-control" placeholder="Ex: 0197000000" required>
            </div>

            <div class="form-group">
                <label for="montant">Montant à payer (F CFA)</label>
                <input type="number" name="montant" class="form-control" placeholder="Ex: 3000" required>
            </div>

            <button type="submit" class="btn btn-payer">✅ Enregistrer le paiement</button>
        </form>
    </div>
</div>
@endsection
