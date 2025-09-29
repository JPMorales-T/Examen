<!-- Fecha Field -->
<div class="col-sm-12">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{{ $servicio->fecha }}</p>
</div>

<!-- Diagnostico Field -->
<div class="col-sm-12">
    {!! Form::label('diagnostico', 'Diagnostico:') !!}
    <p>{{ $servicio->diagnostico }}</p>
</div>

<!-- Solucion Field -->
<div class="col-sm-12">
    {!! Form::label('solucion', 'Solucion:') !!}
    <p>{{ $servicio->solucion }}</p>
</div>

<!-- Estado Id Field -->
<div class="col-sm-12">
    {!! Form::label('estado_id', 'Estado Id:') !!}
    <p>{{ $servicio->estado_id }}</p>
</div>

<!-- Tecnico Id Field -->
<div class="col-sm-12">
    {!! Form::label('tecnico_id', 'Tecnico Id:') !!}
    <p>{{ $servicio->tecnico_id }}</p>
</div>

<!-- Cliente Id Field -->
<div class="col-sm-12">
    {!! Form::label('cliente_id', 'Cliente Id:') !!}
    <p>{{ $servicio->cliente_id }}</p>
</div>

<!-- Equipo Id Field -->
<div class="col-sm-12">
    {!! Form::label('equipo_id', 'Equipo Id:') !!}
    <p>{{ $servicio->equipo_id }}</p>
</div>

