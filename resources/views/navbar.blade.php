<style>
    ul {
        list-style-type: none;
        padding: 0;
        background-color: #2c3d50;
        overflow: hidden;
        display: flex;
        flex-wrap: wrap;
    }

    li {
        margin: 0;
    }

    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
        transition: background-color 0.3s;
        font-weight: bold;
    }

    li a:hover {
        background-color: #1abc9c;
    }

    li a.active {
        background-color: #e74c3c;
    }
</style>

<ul>
    <li><a href="{{ route('app_home') }}" class="active">Home</a></li>
    <li><a href="{{ route('app_home') }}">About</a></li>
    <li><a href="{{ route('app_admin') }}">Dashboard</a></li>
    <li><a href="{{ route('app_caissier') }}">Paiements</a></li>
    <li><a href="{{ route('app_client_menu') }}">Menu</a></li>
    <li><a href="{{ route('app_client_avis') }}">Avis</a></li>
    <li><a href="{{ route('app_cuisinier') }}">Préparations</a></li>
    <li><a href="{{ route('app_livreur') }}">Livraisons</a></li>
    <li><a href="{{ route('app_serveur') }}">Commandes</a></li>
</ul>
