<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control','id'=>'fecha']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#fecha').datepicker()
    </script>
@endpush

<!-- Diagnostico Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('diagnostico', 'Diagnostico:') !!}
    {!! Form::textarea('diagnostico', null, ['class' => 'form-control', 'required', 'maxlength' => 16777215, 'maxlength' => 16777215]) !!}
</div>

<!-- Solucion Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('solucion', 'Solucion:') !!}
    {!! Form::textarea('solucion', null, ['class' => 'form-control', 'required', 'maxlength' => 16777215, 'maxlength' => 16777215]) !!}
</div>

<!-- Estado Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado_id', 'Estado Id:') !!}
    {!! Form::number('estado_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Tecnico Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tecnico_id', 'Tecnico Id:') !!}
    {!! Form::number('tecnico_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Cliente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_id', 'Cliente Id:') !!}
    {!! Form::number('cliente_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Equipo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('equipo_id', 'Equipo Id:') !!}
    {!! Form::number('equipo_id', null, ['class' => 'form-control', 'required']) !!}
</div>