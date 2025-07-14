@extends('base')

@section('content')
<div class="min-h-screen bg-gray-100 py-6 px-4">
    <h1 class="text-4xl font-bold text-center text-red-600 mb-6">Menu du Jour</h1>

    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Colonne gauche -->
        <div class="space-y-4">
            @foreach($platsGauche as $plat)
                <div class="bg-white rounded-lg shadow p-3 text-center text-sm">
                    <img src="{{ asset('images/' . $plat->image) }}" alt="{{ $plat->nom }}" class="w-20 h-20 mx-auto rounded object-cover mb-2">
                    <h2 class="font-semibold text-blue-700 hover:underline">
                      <a href="{{ route('commande', $plat->id) }}">{{ $plat->nom }}</a>
                    </h2>
                    <p class="text-gray-500 text-xs">{{ Str::limit($plat->description, 40) }}</p>
                    <p class="text-green-600 font-bold">{{ $plat->prix }} FCFA</p>
            
                </div>
            @endforeach
        </div>

        <!-- Colonne droite -->
        <div class="space-y-4">
            @foreach($platsDroite as $plat)
                <div class="bg-white rounded-lg shadow p-3 text-center text-sm">
                    <img src="{{ asset('images/' . $plat->image) }}" alt="{{ $plat->nom }}" class="w-20 h-20 mx-auto rounded object-cover mb-2">
                    <h2 class="font-semibold text-blue-700 hover:underline">
                     <a href="{{ route('commande', $plat->id) }}">{{ $plat->nom }}</a>
                    </h2>
                    <p class="text-gray-500 text-xs">{{ $plat->description }}</p>
                    <p class="text-green-600 font-bold">{{ $plat->prix }} FCFA</p>
                    
                </div>
            @endforeach
        </div>
    </div>

   
</div>
@endsection
