@extends('base')

@section('content')
<div class="max-w-4xl mx-auto p-6">
    <h1 class="text-xl font-bold mb-4">Livraisons à effectuer</h1>

    @foreach ($livraisons as $livraison)
    <div class="border p-4 mb-4 rounded bg-white shadow">
        <p><strong>Client :</strong> {{ $livraison->client }}</p>
        <p><strong>Adresse :</strong> {{ $livraison->adresse }}</p>
        <p><strong>Montant :</strong> {{ $livraison->montant }} FCFA</p>
        <form method="POST" action="{{ route('livreur.confirmer', $livraison->id) }}">
            @csrf
            <button class="bg-blue-600 text-white px-4 py-2 rounded mt-2">Marquer comme livrée</button>
        </form>
    </div>
    @endforeach
</div>
@endsection
