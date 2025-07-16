@extends('base')

@section('content')
<div class="max-w-7xl mx-auto p-8 bg-gray-950 text-white rounded-2xl shadow-2xl">
    <h1 class="text-4xl font-bold mb-10 text-center text-white tracking-wide uppercase">Tableau de bord - Admin</h1>

    <div class="bg-white text-gray-900 rounded-lg shadow overflow-x-auto">
        <table class="w-full table-auto text-left border-collapse">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 py-3">Nom du client</th>
                    <th class="px-4 py-3">Plat</th>
                    <th class="px-4 py-3">Quantité</th>
                    <th class="px-4 py-3">Prix total (FCFA)</th>
                    <th class="px-4 py-3">Date</th>
                </tr>
            </thead>
            <tbody>
                @forelse($commandes as $commande)
                    <tr class="border-b hover:bg-gray-100 transition">
                        <td class="px-4 py-3">{{ $commande->nom_client }}</td>
                        <td class="px-4 py-3">{{ $commande->plat }}</td>
                        <td class="px-4 py-3">{{ $commande->quantite }}</td>
                        <td class="px-4 py-3">{{ number_format($commande->prix_total, 0, ',', ' ') }}</td>
                        <td class="px-4 py-3">{{ $commande->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center px-4 py-6 text-gray-500">Aucune commande trouvée.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
