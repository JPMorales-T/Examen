
<li class="nav-item">
    <a href="{{ route('estados.index') }}" class="nav-link {{ Request::is('estados*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Estados</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('clientes.index') }}" class="nav-link {{ Request::is('clientes*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Clientes</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('marcas.index') }}" class="nav-link {{ Request::is('marcas*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Marcas</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('tecnicos.index') }}" class="nav-link {{ Request::is('tecnicos*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Tecnicos</p>
    </a>
</li>
