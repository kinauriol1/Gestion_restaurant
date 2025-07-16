@extends('base')

@section('content')
<style>
    body {
        background-image: url('/images/background.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    .dashboard-container {
        background-color: rgba(255, 255, 255, 0.08);
        backdrop-filter: blur(10px);
        padding: 50px;
        border-radius: 25px;
        box-shadow: 0 0 25px rgba(0, 0, 0, 0.4);
        color: white;
        max-width: 1000px;
        margin: 60px auto;
    }

    h2 {
        text-align: center;
        font-size: 30px;
        margin-bottom: 30px;
        color: #fff;
    }

    table {
        width: 100%;
        background-color: rgba(255, 255, 255, 0.1);
        border-collapse: collapse;
        border-radius: 12px;
        overflow: hidden;
    }

    th, td {
        padding: 15px;
        text-align: center;
        border-bottom: 1px solid #fff;
    }

    th {
        background-color: rgba(0, 0, 0, 0.2);
        font-weight: bold;
        color: #fff;
    }

    td {
        color: #eee;
    }

    .no-data {
        text-align: center;
        font-size: 18px;
        margin-top: 30px;
        color: #ccc;
    }
</style>

<div class="dashboard-container">
    <h2>📋 Liste des Commandes</h2>

    @if($commandes->count() > 0)
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Client</th>
                <th>Plat</th>
                <th>Quantité</th>
                <th>Prix Total (FCFA)</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($commandes as $commande)
            <tr>
                <td>{{ $commande->id }}</td>
                <td>{{ $commande->nom_client }}</td>
                <td>{{ $commande->plat }}</td>
                <td>{{ $commande->quantite }}</td>
                <td>{{ $commande->prix_total }}</td>
                <td>{{ $commande->created_at->format('d/m/Y à H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p class="no-data">Aucune commande enregistrée pour le moment.</p>
    @endif
</div>
@endsection
