<!-- Numero Serie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_serie', 'Numero Serie:') !!}
    {!! Form::text('numero_serie', null, ['class' => 'form-control', 'required', 'maxlength' => 45, 'maxlength' => 45]) !!}
</div>

<!-- Cliente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_id', 'Cliente Id:') !!}
    {!! Form::number('cliente_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Modelo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('modelo_id', 'Modelo Id:') !!}
    {!! Form::number('modelo_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Marca Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('marca_id', 'Marca Id:') !!}
    {!! Form::number('marca_id', null, ['class' => 'form-control', 'required']) !!}
</div>