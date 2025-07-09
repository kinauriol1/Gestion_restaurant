@extends('base')

@section('content')
<div class="max-w-7xl mx-auto p-8 bg-gray-950 text-white rounded-2xl shadow-2xl">
    <h1 class="text-4xl font-bold mb-10 text-center text-white tracking-wide uppercase">Tableau de bord - Admin</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Carte Commandes du jour -->
        <div class="bg-gradient-to-br from-blue-800 to-blue-500 p-6 rounded-xl shadow-lg hover:scale-105 hover:shadow-2xl transition duration-300 ease-in-out">
            <h2 class="text-xl font-semibold mb-3">Commandes du jour</h2>
            <p class="text-5xl font-extrabold">18</p>
        </div>

        <!-- Carte Ventes -->
        <div class="bg-gradient-to-br from-green-800 to-green-500 p-6 rounded-xl shadow-lg hover:scale-105 hover:shadow-2xl transition duration-300 ease-in-out">
            <h2 class="text-xl font-semibold mb-3">Ventes (FCFA)</h2>
            <p class="text-5xl font-extrabold">52 500</p>
        </div>

        <!-- Carte Plats populaires -->
        <div class="bg-gradient-to-br from-yellow-600 to-yellow-400 p-6 rounded-xl shadow-lg hover:scale-105 hover:shadow-2xl transition duration-300 ease-in-out">
            <h2 class="text-xl font-semibold mb-4">Plats populaires</h2>
            <ul class="list-disc ml-6 space-y-1 text-lg">
                <li>Poulet braisé</li>
                <li>Riz sauce tomate</li>
                <li>Jus de bissap</li>
            </ul>
        </div>
    </div>
</div>
@endsection
