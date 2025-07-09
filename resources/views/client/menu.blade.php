@extends('base')

@section('content')
<div class="max-w-5xl mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Menu du jour</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($plats as $plat)
        <div class="border p-4 rounded shadow">
            <h2 class="font-semibold text-lg">{{ $plat->nom }}</h2>
            <p>{{ $plat->description }}</p>
            <p class="text-green-600 font-bold">{{ $plat->prix }} FCFA</p>
            <form method="POST" action="{{ route('client.commande') }}">
                @csrf
                <input type="hidden" name="plat_id" value="{{ $plat->id }}">
                <button type="submit" class="bg-green-500 text-white px-4 py-1 rounded mt-2">Commander</button>
            </form>
        </div>
        @endforeach
    </div>
</div>
@endsection
