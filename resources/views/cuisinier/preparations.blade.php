@extends('base')

@section('content')
<div class="max-w-6xl mx-auto p-6">
    <h1 class="text-xl font-bold mb-4">Préparation des commandes</h1>

    <div class="space-y-4">
        @foreach ($commandes as $commande)
        <div class="border p-4 rounded shadow bg-white">
            <h2 class="font-semibold">Commande #{{ $commande->id }} - {{ $commande->client }}</h2>
            <ul class="list-disc ml-5">
                @foreach ($commande->plats as $plat)
                <li>{{ $plat->nom }} x{{ $plat->pivot->quantite }}</li>
                @endforeach
            </ul>
            <form method="POST" action="{{ route('cuisinier.update', $commande->id) }}">
                @csrf
                @method('PUT')
                <select name="statut" class="border rounded p-2 mt-2">
                    <option value="en cours">En cours</option>
                    <option value="prêt">Prêt</option>
                </select>
                <button type="submit" class="ml-2 bg-blue-500 text-white px-3 py-1 rounded">Valider</button>
            </form>
        </div>
        @endforeach
    </div>
</div>
@endsection
