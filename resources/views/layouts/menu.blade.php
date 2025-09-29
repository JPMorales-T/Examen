
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
