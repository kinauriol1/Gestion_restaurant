@extends('base')

@section('content')
<div class="max-w-5xl mx-auto p-6">
    <h1 class="text-xl font-bold mb-4">Paiement des commandes</h1>

    @foreach ($commandes as $commande)
    <div class="border rounded p-4 mb-4 bg-white shadow">
        <p>Client : <strong>{{ $commande->client }}</strong></p>
        <p>Montant total : <strong>{{ $commande->total }} FCFA</strong></p>
        <form method="POST" action="{{ route('paiement.valider', $commande->id) }}">
            @csrf
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded mt-2">Valider le paiement</button>
        </form>
    </div>
    @endforeach
</div>
@endsection
