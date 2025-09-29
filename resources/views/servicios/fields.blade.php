
<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p class="form-control-plaintext">
        {{ $servicio->fecha ?? now()->format('Y-m-d H:i:s') }}
    </p>
    {!! Form::hidden('fecha', $servicio->fecha ?? now()->format('Y-m-d H:i:s')) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha').datepicker();
    </script>
@endpush

<!-- Diagnostico Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('diagnostico', 'Diagnostico:') !!}
    {!! Form::textarea('diagnostico', null, ['class' => 'form-control', 'required', 'maxlength' => 16777215]) !!}
</div>

<!-- Solucion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('solucion', 'Solucion:') !!}
    {!! Form::textarea('solucion', null, ['class' => 'form-control', 'required', 'maxlength' => 16777215]) !!}
</div>

<!-- Estado Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado_id', 'Estado:') !!}
    {!! Form::select('estado_id', $estados, null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Tecnico Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tecnico_id', 'Tecnico:') !!}
    {!! Form::select('tecnico_id', $tecnicos, null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Cliente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_id', 'Cliente:') !!}
    {!! Form::select('cliente_id', $clientes, null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Equipo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('equipo_id', 'Equipo:') !!}
    {!! Form::select('equipo_id', $equipos, null, ['class' => 'form-control', 'required']) !!}
</div>
