@extends('base')

@section('content')
<div class="min-h-screen bg-gray-100 py-6 px-4">
    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow">
        @if (isset($plat))
            <img src="{{ asset('images/' . $plat->image) }}" alt="{{ $plat->nom }}" class="w-full h-60 object-cover rounded mb-4">

            <h1 class="text-xl font-bold text-gray-800 mb-2">{{ $plat->nom }}</h1>
            <p class="text-gray-600 mb-4">{{ $plat->description }}</p>
            <p class="text-green-600 font-semibold text-lg mb-4">{{ $plat->prix }} FCFA</p>

            <!-- 🔽 FORMULAIRE DE COMMANDE -->
            <form action="{{ route('commande.store') }}" method="POST" class="space-y-4 mt-6">
                @csrf

                <input type="hidden" name="plat" value="{{ $plat->nom }}">
                <input type="hidden" name="prix_unitaire" id="prix_unitaire" value="{{ $plat->prix }}">

                <div>
                    <label for="nom_client" class="block text-sm font-medium text-gray-700">Nom du client</label>
                    <input type="text" name="nom_client" id="nom_client" class="mt-1 block w-full rounded border-gray-300 shadow-sm" required>
                </div>

                <div>
                    <label for="quantite" class="block text-sm font-medium text-gray-700">Quantité</label>
                    <input type="number" name="quantite" id="quantite" class="mt-1 block w-full rounded border-gray-300 shadow-sm" min="1" required>
                </div>

                <input type="hidden" name="prix_total" id="prix_total">

                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                    Commander
                </button>
            </form>
            <!-- 🔼 FIN FORMULAIRE -->
        @else
            <p class="text-red-600">Plat introuvable.</p>
        @endif

        <a href="{{ route('menu') }}" class="inline-block mt-6 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Retour au menu
        </a>
    </div>
</div>

<!-- Script JS pour calculer le prix total automatiquement -->
<script>
    document.getElementById('quantite').addEventListe

