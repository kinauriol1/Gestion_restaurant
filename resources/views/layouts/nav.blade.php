<nav style="margin-bottom: 1rem;">
    @auth
        <strong>Connecté en tant que : {{ Auth::user()->name }} ({{ Auth::user()->role->nom }})</strong> |
        @if(Auth::user()->role->nom == 'admin')
            <a href="/admin">Dashboard Admin</a>
        @elseif(Auth::user()->role->nom == 'client')
            <a href="/client/menu">Menu</a>
        @elseif(Auth::user()->role->nom == 'serveur')
            <a href="/serveur/commandes">Commandes</a>
        @elseif(Auth::user()->role->nom == 'cuisinier')
            <a href="/cuisinier/preparations">Préparations</a>
        @elseif(Auth::user()->role->nom == 'caissier')
            <a href="/caissier/paiements">Paiements</a>
        @elseif(Auth::user()->role->nom == 'livreur')
            <a href="/livreur/livraisons">Livraisons</a>
        @endif

        | <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit">Se déconnecter</button>
        </form>
    @else
        <a href="{{ route('login') }}">Se connecter</a> |
        <a href="{{ route('register') }}">S'inscrire</a>
    @endauth
</nav>
