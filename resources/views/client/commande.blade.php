@extends('base')

@section('content')
<div class="min-h-screen bg-gray-100 py-6 px-4">
    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow">
        <img src="{{ asset('images/' . $plat->image) }}" alt="{{ $plat->nom }}" class="w-full h-60 object-cover rounded mb-4">

        <h1 class="text-xl font-bold text-gray-800 mb-2">{{ $plat->nom }}</h1>

        <p class="text-gray-600 mb-4">{{ $plat->description }}</p>

        <p class="text-green-600 font-semibold text-lg mb-4">{{ $plat->prix }} FCFA</p>

        <a href="{{ route('menu') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Retour au menu
        </a>
    </div>
</div>
@endsection
