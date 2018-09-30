<div class="navbar-header">

    <!-- Collapsed Hamburger -->
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <!-- Logo-->
    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name') }}
    </a>
</div>

<div class="collapse navbar-collapse" id="app-navbar-collapse">
    <ul class="nav navbar-nav">
        <li>
            <a href="{{ route('vianda.index') }}">Viandas</a>
        </li>
        <li>
            <a href="{{ route('persona.index') }}">Personas</a>
        </li>
        <li>
            <a href="{{ route('pedido.index') }}">Pedidos</a>
        </li>
    </ul>
</div>
