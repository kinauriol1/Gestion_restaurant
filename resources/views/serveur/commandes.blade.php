@extends('base')

@section('content')
<div class="max-w-4xl mx-auto py-6">
    <h1 class="text-xl font-bold mb-4">Prise de commandes</h1>

    <form method="POST" action="{{ route('commandes.store') }}">
        @csrf
        <div class="grid gap-4">
            <input type="text" name="client" placeholder="Nom du client" class="border p-2 rounded w-full">
            <select name="table" class="border p-2 rounded w-full">
                <option>Choisir une table</option>
                <option>Table 1</option>
                <option>Table 2</option>
                <option>Table 3</option>
            </select>

            <textarea name="commentaire" class="border p-2 rounded w-full" placeholder="Commentaire du client"></textarea>

            <button type="submit" class="bg-blue-600 text-white py-2 rounded">Enregistrer la commande</button>
        </div>
    </form>
</div>
@endsection
